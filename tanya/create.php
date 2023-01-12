<?php

include_once('conn.php');

// Get the form data
$forCo = $_POST['forCo'];
$printCo = $_POST['printCo'];
$PayedDate = $_POST['PayedDate'];
$invoiceNum = $_POST['invoiceNum'];
$note = $_POST['note'];
$grantedTo = $_POST['grantedTo'];
$cost = $_POST['cost'];
$description = $_POST['description'];
//$attached = $_POST['attached'];
$state = $_POST['state'];
$currency = $_POST['currency'];

$file = $_FILES['image']['tmp_name'];
$filename = $_FILES['image']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);
$new_filename = uniqid() . "." . $ext;

$target_folder = "IMG/";
$target_path = $target_folder . $new_filename;
move_uploaded_file($file, $target_path);


// Prepare the INSERT statement

$stm = $conn->prepare("SELECT * from main where invoiceNum=? AND printCo=?");

$stm->bind_param('ss',$invoiceNum,$printCo);
$stm->execute();
$result= $stm->get_result();
if($result->num_rows == 0)
{
// Insert the data into the database
$sql = "INSERT INTO main (forCo, printCo,  PayedDate, invoiceNum, note, grantedTo, cost, description, attached,state,  currency ) 
            VALUES ('$forCo', '$printCo', '$PayedDate', '$invoiceNum', '$note', '$grantedTo', '$cost', '$description' ,'$target_path', '$state', '$currency' )";
if (mysqli_query($conn, $sql)) {

    header("location: index.php?message=success");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location: index.php?message=failed");
}
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location: index.php?message=failed");
}
mysqli_close($conn);



?>
