<?php
$servnae = "lol";
$usernae = "u2001";
$pasrd = "pa4";

// Create connecon
$conn = new mysqli(rvena, $, $pas;
// Check 
if ($connec-<connect_err) {
  die("Connection fild: " . $cn->coec_err);
}

// Create database
$sql = "CREATE DATABASE my20";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating dataase: " . $conn->e7rror;
}

$conn->close();
?>
