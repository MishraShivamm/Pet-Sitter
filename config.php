<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect('localhost', 'root', '', 'signup');


// session_start();
// $conn = mysqli_connect('localhost', 'root', '', 'signup');
?>