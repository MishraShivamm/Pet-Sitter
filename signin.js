document.addEventListener('DOMContentLoaded', function () {
    // Add an event listener to the form submission
    document.querySelector('form').addEventListener('submit', function (event) {
        // Get the entered email value
        let email = document.getElementById('email').value;

        // Validate the email format (you can use a more sophisticated validation)
        if (!isValidEmail(email)) {
            // Show an alert for invalid email
            alert('Invalid email address. Please enter a valid email.');
            event.preventDefault(); // Prevent the form from submitting
        }
    });

    // Function to validate email format
    function isValidEmail(email) {
        // You can implement a more sophisticated email validation here
        // This example uses a simple check for presence of "@" and "."
        return email.includes('@') && email.includes('.');
    }
});
