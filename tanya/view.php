<?php
      include_once('conn.php');
      // include_once('valid.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Tracker</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script scr="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</head>


<body style="margin:50px 70px 70px 70px; background: rgb(240,241,255);
background: radial-gradient(circle, rgba(240,241,255,1) 0%, rgba(248,254,255,1) 22%, rgba(255,255,255,1) 100%);">
    <ul class="nav nav-tabs" style="margin:0 0 50px 0; font-size:1.2rem; display:flex">


        <li class="nav-item" style="padding:0 100px 0 0">
            <h2 style="color:#0d6efd">Invoice Tracker</h2>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="index.php">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="view.php">Main</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="payed.php">Payed</a>
        </li>



        <style>
        .form-inline {
            display: inline-block;
        }

        .form-control {

            display: inline-block;
            width: auto;


        }
        
                input[type="checkbox"] {
                    width: 30px;
                    height: 20px;

                }

                .dropdown-menu label{
                    padding: 11px 40px 11px 11px;
                    padding-right: 30px;
                }
              
        </style>



        <div style="padding-left:200px; padding-right:20px" style="display:flex; " class="form-container">

            <form method="get" action="search2.php" style="float:left; padding-right:200px" class="form-inline">
                <label for="start_date" class="sr-only">Start date:</label>
                <input type="date" name="start_date" class="form-control mb-1 mr-sm-2" style="margin-right:40px">

                <label for="end_date" class="sr-only">End date:</label>
                <input type="date" name="end_date" style="margin:0 60px 0 0" class="form-control mb-2 mr-sm-2">
                <select style="margin-right:20px" name="state" class="form-control mb-2 mr-sm-2">
                    <option value="">-Choose a State-</option>
                    <option value="idle">idle</option>
                    <option value="inProcess">inProcess</option>
                    <option value="payed">payed</option>
                </select>




                <select style="margin-right:40px; margin-left:20px" name="column" class="form-control mb-2 mr-sm-2">
                    <option value="">-Choose a Column-</option>
                    <option value="forCo">For Company</option>
                    <option value="invoiceNum">invoice No.</option>
                    <option value="printCo">Print Company</option>
                    <option value="cost">Cost</option>
                </select>



                <label for="search_term" class="sr-only">Enter search term:</label>
                <input type="text" name="search_term" class="form-control mb-2 mr-sm-2">



             

                <div class="dropdown " style="display: inline-block;
                     width: auto;margin-left:20px ">
                    <button class=" mb-1 btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Company
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                        <div class="dropdown-item">
                            <input type="checkbox" id="Hawkary" name="forCo[]" value="Hawkary">
                            <label for="Hawkary">Hawkary</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Mera" aria-label="example checkbox">
                            <label for="forCo">Mera</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Med">
                            <label for="forCo">Med</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Hikma">
                            <label for="forCo">Hikma</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Desma">
                            <label for="forCo">Desma</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="UPM">
                            <label for="forCo">UPM</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Philadelphia">
                            <label for="forCo">Philadelphia</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Micro">
                            <label for="forCo">Micro</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Ajenta">
                            <label for="forCo">Ajenta</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Viatris">
                            <label for="forCo">Viatris</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="SunPharma">
                            <label for="forCo">SunPharma</label>
                        </div>

                        <div class="dropdown-item">
                            <input type="checkbox" id="forCo" name="forCo[]" value="Others">
                            <label for="forCo">Others</label>
                        </div>

                    </div>
                </div>


                <input style="margin-left: 20px" type="submit" value="Filter" class="btn btn-primary mb-2">


            </form>

                  



   

    </ul>





    <table class="table" id="table">
        <thead>
            <tr style="background-color:#ebfcff;color:#3E4756">
                <th>NUMBER</th>
                <th>FOR COMPANY</th>
                <th>PRINT COMPANY</th>
                <th>PAYED DATE</th>
                <th>INVOICE NUMBER</th>
                <th>COST</th>
                <th>STATE</th>
                <th>GRANTED TO</th>
                <th>DESCRIPTION</th>
                <th>NOTE</th>
                <th>ATTACHED</th>
                <th>UPDATE</th>
                <th>DELETE</th>
        </thead>

        <script>
        function d() {
            // Get the parent td element
            var td = Document.getElementById('state');

            // Get the value of the td element
            var tdValue = td.textContent;

            // Check the value of the td element and apply the appropriate styling
            if (tdValue == "inProcess") {
                td.style.backgroundColor = "green";
            } else if (tdValue == "recived") {
                td.style.backgroundColor = "yellow";
            }
        }
        </script>

        <TBody>
            </tr>
            <?php

      
      // Get the current page number
      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      
      // Set the number of rows to display per page
      $num_rows_per_page = 12;
      
      // Calculate the offset
      $offset = ($page - 1) * $num_rows_per_page;
      
      // Query the database
      $result = mysqli_query($conn, "SELECT * FROM main where state !='payed' order by number DESC LIMIT  $num_rows_per_page OFFSET $offset ");
      
      $costtotDo=0;
      $costtotDe=0;
    
  
      // Loop through the rows and display them
      while ($row = mysqli_fetch_assoc($result)) {
        
        $img=$row['attached'];
        $id =$row['number'];
        $currency="";
        
        if($row['currency'] == "dinar"){
          $currency="IQD";
          $costtotDe+=$row["cost"];
        }
        else{
          $currency="$";
          $costtotDo+=$row["cost"];

        }
        $style;
        if($row['state'] == "inProcess"){
          $style='#FFFDC1';
        }
        elseif($row['state'] === "payed"){
          $style='#AEF4A4';
        }
        // idle for recived
        elseif($row['state'] === "idle"){
          $style='#E67676; color:white' ;
        }
        
        else 
        {
          $style ="#ffffff";
        }
       
             echo "
         
             <tr class='rows'>
                <td>". $row["number"] . " </td>
                <td>". $row["forCo"] . "</td>
                <td>". $row["printCo"] . "</td>
                <td>". $row["PayedDate"] . "</td>
                <td>". $row["invoiceNum"] . "</td>
                <td>". $row["cost"] . " $currency</td>
                <td style='background-color:{$style}' id='state_{$row["number"]}'  >". $row["state"] . "  </td>
                <td>". $row["grantedTo"] . "</td>
                
               
                <td style='word-break: break-all; width: 150px'>". $row["description"] . "</td>
                <td style='word-break: break-all; width: 150px; '>". $row["note"] . "</td>
                <td>
                <a href='$img' target='_blank'>
                    <img width='50px' height='50px' src=".$img." />
                </a>
                </td> 

                <td>
                  <form method='post' action='update.php'>
                  <input type='hidden' name='id' value='$id'>
                  <input class='btn btn-sm btn-info text-white'  type='submit' width value='Update'>
                  </form>
                  </td>
                <td >

                <button class='btn btn-sm btn-danger' style='background-color:#E67676' onclick='createPopup($id)'>Delete</button>


                </td>
                
                
            </tr>
            
            
            "
            ; 
      }
      
                  // <form method='post' action='delete.php'>
                  //   <input type='hidden' name='id' value='$id'>
                  //   <input class='btn btn-sm btn-danger' style='background-color:#E67676' type='submit' width value='Delete'>
                  // </form>
      echo '
    <tr class="rows">
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td>  </td>
      <td> <span > Total Dollar = '.$costtotDo.' $  </span> <br>
      <span > Total Dinar = '.$costtotDe.' IQD </span>
       </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      </tr>
      
      </TBody>
      </table> 
    
      ';
     

      // Calculate the total number of pages
      $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM main where state != 'payed'")) / $num_rows_per_page);
      
      // Display the pagination links
    
      echo "<nav aria-label='Page navigation'>";
      echo "<ul class='pagination'>";
      
      // Previous page link
      if ($page > 1) 
      {
          echo "<li class='page-item'>";
          echo "<a class='page-link' href='?page=" . ($page - 1) . "' aria-label='Previous'>";
          echo "<span aria-hidden='true'>&laquo;</span>";
          echo "<span class='sr-only'>Previous</span>";
          echo "</a>";
          echo "</li>";
      }
      
        
         
        
      // Page links
for ($i = 1; $i <= $total_pages; $i++) {
  if ($i == $page) {
      echo "<li class='page-item active'>";
      echo "<span class='page-link'>$i <span class='sr-only'>(current)</span></span>";
      echo "</li>";
  } else {
      echo "<li class='page-item'>";
      echo "<a class='page-link' href='?page=$i'>$i</a>";
      echo "</li>";
  }
}

// Next page link
if ($page < $total_pages) {
  echo "<li class='page-item'>";
  echo "<a class='page-link' href='?page=" . ($page + 1) . "' aria-label='Next'>";
  echo "<span aria-hidden='true'>&raquo;</span>";
  echo "<span class='sr-only'>Next</span>";
  echo "</a>";
  echo "</li>";
  echo "</nav>";
  echo "</ul>";}
        ?>




</body>

<script>
function createPopup(id) {

    if (confirm("Are you sure to delete!")) {
        window.location.href = "delete.php?id=" + id + "";

    }


}
</script>
<?php
   
// SELECT * FROM main where state !='payed' order by number DESC LIMIT  $num_rows_per_page OFFSET $offset
 $query5 = "SELECT SUM(cost)  as totaldolar FROM main where currency like 'dolar'";
$query6 = "SELECT SUM(cost)  as totaldianr FROM main where currency like 'dinar'";
      $result = mysqli_query($conn, $query5);
      $result2 = mysqli_query($conn, $query6);
      $row = mysqli_fetch_assoc($result);
      $row2 = mysqli_fetch_assoc($result2);
      ?>

<div style=" display: flex; 
               margin-top:50px;
               margin-left:18%;
                justify-content: space-around; 
                background-color:#ebfcff;
                color:#3E4756; width:50vw">
    <h5>All Tables Total Dolar = <?php echo $row['totaldolar']?></h5>
    <h5>All Tables Total Dinar = <?php echo $row2['totaldianr']?></h5>
</div>

</html>