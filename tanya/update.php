<?php
      include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script scr="js/bootstrap.js"></script> </head>
    <body style="margin:50px 70px 70px 70px; background: rgb(240,241,255);
background: radial-gradient(circle, rgba(240,241,255,1) 0%, rgba(248,254,255,1) 22%, rgba(255,255,255,1) 100%);">
<ul class="nav nav-tabs" style="margin:0 0 50px 0; font-size:1.2rem; display:flex">
  

  <li class="nav-item" style="padding:0 100px 0 0">
   <h2 style="color:#0d6efd">Invoice Tracker</h2>
  </li>

  <li class="nav-item">
    <a class="nav-link "  href="index.php">Create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="view.php">view</a>
  </li>
</ul>

<?php

$id=$_POST['id'];

$sql = "SELECT * FROM main WHERE number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($num,$forCo ,$printCo,$PayedDate,$invoiceNum,$state,$note,$grantedTo,$cost,$description,$image,$currency);
$stmt->fetch();


   ?>
   
    <form style="margin-top:50px; font-size: 20px;" class="form" action="update2.php" method="post"  enctype="multipart/form-data">

        <div class="mb-2">
        <input class="form-control" style="width:500px;" type="hidden" id="num" name="num" value="<?php echo $num?>" >
        <input class="form-control"  style="width:500px;" style="width:500px;" type="hidden" id="image" name="image" value="<?php echo $image?>" />
        </div>
        
        <div class="mb-2">
          <label class="form-label" class="form-label"for="forCo">For Company</label>
        <input class="form-control" style="width:500px;" type="text" name="forCo" id="forCo" value="<?php echo $forCo ?>"  />
        </div>
        
        <div class="mb-2">
          <label class="form-label" class="form-label"for="printCo">print company</label>
        <input class="form-control" style="width:500px;" type="text" name="printCo" id="printCo" value="<?php echo $printCo ?>"/>
        </div>
        
        <div class="mb-2">
        <label class="form-label" class="form-label"for="PayedDate">payed date</label>
        <input class="form-control" style="width:500px;" type="date" name="PayedDate" id="PayedDate" value="<?php echo $PayedDate ?>"/>
        </div>
         
        
        <div class="mb-2">
        <label class="form-label" class="form-label"for="invoiceNum">invoice number</label>
        <input class="form-control" style="width:500px;" type="number" name="invoiceNum" id="invoiceNum" value="<?php echo $invoiceNum ?>"/>
        </div>
         
        
  
        <div class="mb-3">
        <label    class="form-label"  for="state">State</label>
        <select  name="state" style="width:500px;" class="form-control ">
          <option value="<?php echo $state ?>">As its = <?php echo $state ?></option>
          <option value="idle">idle</option>
          <option value="inProcess">In Process </option>
          <option value="payed">Payed</option>
        </select>
        </div>
         
       
          
        <div class="mb-2">
        <label class="form-label" class="form-label"for="grantedTo">Granted To</label>
        <input class="form-control" style="width:500px;" type="text" name="grantedTo" id="grantedTo" value="<?php echo $grantedTo ?>"/>
        </div>
         
        <div class="mb-2">
        <label   class="form-label" for="cost">Cost</label>

        <div style="display:flex; width:1000px">
        <input class="form-control" type="currency" name="cost" style="width:500px; folat:left margin-right:20px;  " id="cost" value="<?php echo $cost  ?>">
        <select style=" margin-left:50px; width:200px; float:right" class="form-control "?>">
          <option value="<?php echo $currency?>">As it's <?php echo $currency?></option>
          <option value="dolar">Dolar $</option>
          <option value="dinar">Dinar IQD</option>
        </select>
        </div>
        </div>
        
        
        
        <div class="mb-2">
        <label class="form-label" class="form-label"for="description">description</label>
        <textarea class="form-control"  type="text" style="width:800px;" name="description" id="description" value="<?php echo $description ?>" ></textarea>
        </div> 
        
        <div class="mb-2">
        <label class="form-label" class="form-label"for="note">note</label>
        <textarea class="form-control" style="width:800px;"  type="text" name="note" id="note" value="<?php echo $note ?>"> </textarea>
        </div>
         
        <div class="mb-2">
        <label class="form-label" class="form-label"for="image">attached</label>
        <input class="form-control" style="width:500px;" type="file" name="image" id="image" value="" />  
         <img src="<?php echo $image?>" alt="imgae" width="100" height="100"/>     

        </div>


        <div class="mb-2"> 
        <input  class="form-control " style="background:#0d6efd; color:white;   font-size: 15px;"  type="submit" class="submit" >
           </div>
        </form>          



</body>
</html>