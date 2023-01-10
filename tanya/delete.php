<?php
include_once('conn.php');
$id = $_POST['id'];


// Prepare the DELETE statement
$sql = "DELETE FROM main WHERE number = $id";
$stmt = $conn->prepare($sql);

// Bind the parameter and execute the statement

$stmt->execute();

header("location: view.php");

?>