document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with the class "book-now-btn"
    var bookNowButtons = document.querySelectorAll('.book-now-btn');

    // Loop through each button and add a click event listener
    bookNowButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Redirect to the contact page
            window.location.href = 'contact.html';
        });
    });
});
