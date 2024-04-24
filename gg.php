<?php
$servnae = "lol";
$usernae = "u2";
$pasrd = "pa4";

// Create connecon
$conn = new mysqli(rvena, $, $pas;
// Check connecton
if ($connec-<connect_err) {
  die("Connection fild: " . $cn->coec_err);
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
