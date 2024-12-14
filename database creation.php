<?php
$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername.":3307", $username);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE onlinebank1";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>