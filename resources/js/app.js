import './bootstrap';
// app.js

// Custom JavaScript for your application

// Example JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Add your custom JavaScript code here

    // Example: Show/hide password toggle
    const passwordToggle = document.querySelector('.password-toggle');
    const passwordInput = document.querySelector('#password');

    passwordToggle.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordToggle.querySelector('i').classList.toggle('fa-eye');
        passwordToggle.querySelector('i').classList.toggle('fa-eye-slash');
    });

    // Add more custom JavaScript functionality as needed
});
