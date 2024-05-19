<?php
// Get the token from the URL
$token = $_GET['token'];

// Connect to your database
$conn = new mysqli('localhost', 'root', '', 'signup');

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the token is valid
$stmt = $conn->prepare("SELECT * FROM data WHERE reset_token_hash = ? AND reset_token_expires_at > NOW()");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Token is valid, allow the user to reset the password
    echo "Token is valid. Allow password reset form.";
} else {
    echo "Invalid or expired token.";
}

// Close the database connection
$stmt->close();
$conn->close();

?>
