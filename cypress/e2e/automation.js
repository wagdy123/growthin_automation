// cypress/integration/growthin_spec.js

describe('Growthin Application Tests', () => {
    beforeEach(() => {
        // Open the application before each test
        cy.visit('http://127.0.0.1:8000/');
    });

    it('should open the login page', () => {
        // Click on the "Log In" link
        cy.contains('Log In').click();

        // Verify that the URL is correct
        cy.url().should('eq', 'http://127.0.0.1:8000/login');
    });

    it('should log in successfully', () => {
        // Navigate to the login page
        cy.contains('Log In').click();

        // Enter email and password
        cy.get('#email').type('wagdy2085@gmail.com');
        cy.get('#password').type('123456789');
        cy.get('#flexCheckIndeterminate').click();
        cy.contains('Log In').click();

        // Verify that the URL is correct after logging in
        cy.url().should('eq', 'http://127.0.0.1:8000/');
    });

    it('should check the forgot password functionality', () => {
        // Click on the "Forgot Your Password?" link
        cy.contains('Forgot Your Password?').click();

        // Enter email and send password reset link
        cy.get('#email').type('wagdy2085@gmail.com');
        cy.contains('Send Password Reset Link').click();

        // Verify the URL (this part may vary depending on the actual expected behavior)
        cy.url().should('eq', 'http://127.0.0.1:8000/'); // Update this based on expected behavior after sending the reset link
    });
});
