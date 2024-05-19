<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // you have collected data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Remember to hash the password for security
    $gender = $_POST['gender'];

    $sql = "INSERT INTO signin_data (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
