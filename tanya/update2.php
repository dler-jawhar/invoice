<?php
include_once('conn.php');
 
$num=$_POST["num"];
// Get the form data
$forCo = $_POST['forCo'];
$printCo = $_POST['printCo'];
$PayedDate = $_POST['PayedDate'];
$invoiceNum = $_POST['invoiceNum'];
$note = $_POST['note'];
$grantedTo = $_POST['grantedTo'];
$cost = $_POST['cost'];
$description = $_POST['description'];
$currency = $_POST['currency'];
//$attached = $_POST['attached'];
$state = $_POST['state'];



 if(file_exists($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) 
    {
        
    $file = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $new_filename = uniqid() . "." . $ext;
    
    $target_folder = "IMG/";
    $target_path = $target_folder . $new_filename;
    move_uploaded_file($file, $target_path);
    
    $sql = "UPDATE main SET attached='$target_path' WHERE number='$num' ";
    
     mysqli_query($conn, $sql);
     
    } 
    

$stmt = $conn->prepare("UPDATE main SET forCo=?, printCo=?, PayedDate=?,
 invoiceNum=?, state=?, note=?, grantedTo=?, cost=?, description=?, currency=?  WHERE number=?");

$stmt->bind_param("ssssssssssi", $forCo, $printCo,$PayedDate,$invoiceNum,$state,$note,$grantedTo,$cost,$description,$currency, $num);

$stmt->execute();
$stmt->close();

header("location: view.php");

?>