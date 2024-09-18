<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the submitted data
$user = $_POST['username'];
$pass = $_POST['password'];

// Insert login data into the database
$sql = "INSERT INTO logins (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Login recorded successfully";
    // Redirect or further action
    header("Location: mycss.html"); // Redirect after successful login
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
