<?php
      include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Viewr</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body style="margin:50px 70px 70px 70px; background: rgb(240,241,255);
background: radial-gradient(circle, rgba(240,241,255,1) 0%, rgba(248,254,255,1) 22%, rgba(255,255,255,1) 100%);">
<ul class="nav nav-tabs" style="margin:0 0 50px 0; font-size:1.2rem; display:flex">
  

<li class="nav-item" style="padding:0 100px 0 0">
   <h2 style="color:#0d6efd">Invoice Tracker</h2>
  </li>

  <li class="nav-item">
    <a class="nav-link active"  href="index.php">Create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="view.php">Main</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="payed.php">Payed</a>
  </li>


</ul>
 <?php 
 $message = isset(($_GET["message"])) ? $_GET["message"] : "n";
if($message == "n") {}
else if($message == "success")
{
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Record Has been added to Database
  <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeMe()">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
}
else 
{
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Your Record Has not been added to Database
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeMe()">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    <?php
}
 ?>
    <form  class="form" action="create.php" style="font-size: 20px;" method="post"  enctype="multipart/form-data">
        
       

        <div class="mb-3">    
        <label class="form-label"  for="forCo">For Company</label>
        <select  name="forCo" style="width:500px;" class="form-control ">
          <option value="Hawkary">Hawkary</option>
          <option value="Mera">Mera</option>
          <option value="Med">Med</option>
          <option value="Hikma">Hikma</option>
          <option value="Desma">Desma</option>
          <option value="UPM">UPM</option>
          <option value="Philadelphia">Philadelphia</option>
          <option value="Micro">Micro</option>
          <option value="Ajenta">Ajenta</option>
          <option value="Viatris">Viatris</option>
          <option value="SunPharma">SunPharma</option>
          <option value="Others">Others</option>
        </select>
        </div>

        <div class="mb-3">
        <label class="form-label"  for="printCo">Print Company</label>
        <input style="width:500px;" class="form-control" type="text" name="printCo" id="forCo">
        </div>

        <div class="mb-3">
        <label     class="form-label"  for="PayedDate">Payed date</label>
        <input class="form-control" type="date" style="width:500px;" name="PayedDate" id="PayedDate">
        </div>

        <div class="mb-3">
        
        <label for="invoiceNum">Invoice Number</label>
        <input class="form-control" type="number" style="width:500px;" name="invoiceNum" id="invoiceNum">
        </div>

        <div class="mb-3">
        <label    class="form-label"  for="state">State</label>
        <select  name="state" style="width:500px;" class="form-control ">
          <option value="idle">idle</option>
          <option value="inProcess">In Process </option>
          <option value="payed">Payed</option>
        </select>
        </div>

        <div class="mb-3">
        <label    class="form-label" for="grantedTo">Granted To</label>
        <input class="form-control" style="width:500px;" type="text" name="grantedTo" id="grantedTo">
       </div>

        <div class="mb-3">
        <label   class="form-label" for="cost">Cost</label>

        <div style="display:flex; width:1000px">
        <input class="form-control" type="number" step="any"  name="cost" style="width:500px; folat:left margin-right:20px;  " id="cost">
        <select style=" margin-left:50px; width:200px; float:right" name="currency"  class="form-control ">
          <option value="dolar">Dolar $</option>
          <option value="dinar">Dinar IQD</option>
        </select>
      </div>
        </div>

        <div class="mb-3">
            <label  class="form-label" for="description">Description</label>
        <textarea class="form-control" style="width:800px;" type="text" name="description" id="description"> </TEXtarea>
        </div>

        <div class="mb-3">
        <label    class="form-label" for="note">Note</label>
        <textarea class="form-control" style="width:800px;" type="text" name="note" id="note"></textarea>
        </div>

        <div class="mb-3">
        <label class="form-label" for="image">Attached</label>
        <input class="form-control" style="width:500px;" type="file" name="image" id="image">
       </div>

        <input  class="form-control " style="background:#0d6efd; color:white;   font-size: 15px;"  type="submit" class="submit" >
        
     
        
     
    </form>
</body>
<script >
function closeMe()
{
  document.getElementsByClassName('alert')[0].style.visibility='hidden';

}
</script> 

</html>