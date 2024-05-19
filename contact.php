<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $host ='localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'conbook';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO booking(name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($conn, $sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="contact-form.css"> -->
    <title>Contact Us - Pet Sitter</title>
    <style>/* Styles for the Contact Form */

.contact-section {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd; /* Border for the card-like appearance */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 0 23px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
    background: rgb(238,174,174);
    background: radial-gradient(circle, rgba(238,174,174,1) 55%, rgba(190,180,217,1) 88%, rgba(148,187,233,1) 100%);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: grid;
    grid-gap: 15px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd; /* Border for form fields */
    border-radius: 5px; /* Rounded corners for form fields */
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="Pet Sitter Logo">
                <span>Pet Sitter</span>
            </div>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="loginindex.php" class="signup-btn">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Contact our team.</p>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pet Sitter Website</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
