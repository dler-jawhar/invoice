<?php // Connect to the database
$conn = new mysqli("localhost", "root", "", "finance");

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>