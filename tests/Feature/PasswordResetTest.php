<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_password_reset_link_to_valid_user_email()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'user@example.com',
        ]);

        // Send POST request to the password reset route
        $response = $this->postJson('/api/password/email', [
            'email' => 'user@example.com',
        ]);

        // Assert that the response status is 200 OK
        $response->assertStatus(200);

        // Assert that the reset link was sent (check the JSON response or message)
        $response->assertJson([
            'message' => 'We have emailed your password reset link!',
        ]);
    }

    /** @test */
    public function it_resets_password_with_valid_token()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('oldpassword'),
        ]);

        // Request a password reset link
        $this->postJson('/api/password/email', [
            'email' => 'user@example.com',
        ]);

        // Retrieve the reset token from the database
        $token = DB::table('password_resets')->where('email', 'user@example.com')->first()->token;

        // Send POST request to reset password with the token
        $response = $this->postJson('/api/password/reset', [
            'email' => 'user@example.com',
            'token' => $token,
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => 'user@example.com',
            'token' => $token,
            'password' => Hash::make('newpassword'),
        ]);


        // Assert that the password was reset successfully
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Your password has been reset!',
        ]);

        // Assert that the user's password was updated in the database
        $this->assertTrue(Hash::check('newpassword', $user->fresh()->password));
    }

    /** @test */
    public function it_fails_to_reset_password_with_invalid_token()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('oldpassword'),
        ]);

        // Send POST request to reset password with an invalid token
        $response = $this->postJson('/api/password/reset', [
            'email' => 'user@example.com',
            'token' => 'invalid-token',
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ]);

        // Assert that the response status is 400 Bad Request
        $response->assertStatus(400);

        // Assert that the response contains the correct error message
        $response->assertJson([
            'message' => 'This password reset token is invalid.',
        ]);
    }
}