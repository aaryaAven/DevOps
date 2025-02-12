<?php
$host = "localhost";
$dbname = "skate";
$username = "aarya";
$password = "aarya03@k";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
