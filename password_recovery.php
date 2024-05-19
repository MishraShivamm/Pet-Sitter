<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Table</title>
</head>
<body>
    <table border="2px">
        <!-- <tr>
        <th>Email</th>
        <th>Password</th>
        </tr>  -->
        <?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "signup"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Email, Password FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Email</th><th>Password</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Email"] . "</td><td>" . $row["Password"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
    </table>
    
</body>
</html>