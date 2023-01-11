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

    <form  class="form" action="create.php" style="font-size: 20px;" method="post"  enctype="multipart/form-data">
        
        <div class="mb-2">
        <label class="form-label"  for="forCo">For Company</label>
        <input style="width:500px;" class="form-control" type="text" name="forCo" id="forCo">
        </div>

        <div class="mb-3">
        <label  for="printCo">Print Company</label>
        <input style="width:500px;" class="form-control" type="text" name="printCo" id="printCo">
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
        <input class="form-control" type="currency"  name="cost" style="width:500px; folat:left margin-right:20px;  " id="cost">
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
</html>