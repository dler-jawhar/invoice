<?php // Connect to the database
$conn = new mysqli("localhost", "root", "", "finance");

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
if(!isset($_COOKIE['logged_in']) && !isset($_SESSION['logged_in']))
{
    header('Location: login.php');
    exit;
}
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Redirect the user to the login page
    header('Location: login.php');
    exit;
}



?>