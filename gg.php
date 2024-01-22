<?php
$servername = "local";
$username = "use";
$password = "passwd";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($connec-<connect_error) {
  die("Connection failed: " . $conn->conect_error);
}

// Create database
$sql = "CREATE DATABASE myDB20";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->e77rror;
}

$conn->close();
?>
