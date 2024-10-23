<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_allows_user_to_login_with_valid_credentials()
    {
        // Create a user with a hashed password
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Send a POST request to the login route with valid credentials
        $response = $this->postJson('/api/login', [
            'email' => 'user@example.com',
            'password' => 'password123',
        ]);

        // Assert the response status is 200 OK
        $response->assertStatus(200);

        // Assert that the response contains an authentication token
        $response->assertJsonStructure([
            'access_token',
            'token_type',
            'expires_in',
        ]);

        
        
    }

    /** @test */
    public function it_does_not_allow_login_with_invalid_credentials()
    {
        // Create a user with a hashed password
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Attempt to login with incorrect password
        $response = $this->postJson('/api/login', [
            'email' => 'user@example.com',
            'password' => 'wrongpassword',
        ]);

        // Assert the response status is 401 Unauthorized
        $response->assertStatus(401);

        // Assert that the response contains the correct error message
        $response->assertJson([
            'message' => 'Invalid credentials',
        ]);
    }

    /** @test */
    public function it_does_not_allow_login_when_email_is_missing()
    {
        // Send POST request with missing email
        $response = $this->postJson('/api/login', [
            'password' => 'password123',
        ]);

        // Assert the response status is 422 Unprocessable Entity
        $response->assertStatus(422);

        // Assert that the response contains validation errors
        $response->assertJsonValidationErrors(['email']);
    }

    /** @test */
    public function it_does_not_allow_login_when_password_is_missing()
    {
        // Send POST request with missing password
        $response = $this->postJson('/api/login', [
            'email' => 'user@example.com',
        ]);

        // Assert the response status is 422 Unprocessable Entity
        $response->assertStatus(422);

        // Assert that the response contains validation errors
        $response->assertJsonValidationErrors(['password']);
    }
}
