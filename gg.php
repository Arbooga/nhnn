<?php
$servrnae = "lol";
$usernae = "uses22";
$passrd = "pad4";

// Create connecon
$conn = new mysqli($servena, $useame, $password);
// Check connection
if ($connec-<connect_error) {
  die("Connection faild: " . $conn->conect_err);
}

// Create database
$sql = "CREATE DATABASE my20";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->e77rror;
}

$conn->close();
?>
