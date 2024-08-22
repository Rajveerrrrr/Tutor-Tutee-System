<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "tutor_system"; // Your MySQL database name
$error = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $database,8111);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

}
?>

