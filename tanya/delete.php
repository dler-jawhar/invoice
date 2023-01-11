<?php
include_once('conn.php');

//id is posted via delete button
$id = $_GET['id'];

// Get the image path from the database
$sql = "SELECT attached FROM main WHERE number = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $image_path = $row['attached'];

   // Check if the file exists and delete it
   if (file_exists($image_path)) {
       unlink($image_path);
   }

  

   
} else {
   echo "Error: Image not found.";
}


   // Delete the record from the database
$sql2 = "DELETE FROM main WHERE number = $id";

$stmt = $conn->prepare($sql2);

$stmt->execute();    

header("location: view.php");
?>