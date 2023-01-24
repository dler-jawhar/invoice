<?php
      include_once('conn.php');
      
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script scr="js/bootstrap.js"></script>
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
        <style>.form-inline {
            display: inline-block;
        }

        .form-control {

            display: inline-block;
            width: auto;


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

                <select style="margin-right:20px" name="column" class="form-control mb-2 mr-sm-2">
                    <option value="">-Choose a Column-</option>
                    <option value="forCo">For Company</option>
                    <option value="invoiceNum">invoice No.</option>
                    <option value="printCo">Print Company</option>
                    <option value="cost">Cost</option>
                </select>


                <label for="search_term" class="sr-only">Enter search term:</label>
                <input type="text" name="search_term" class="form-control mb-2 mr-sm-2">

                <input style="margin-left: 20px" type="submit" value="Filter" class="btn btn-primary mb-2">


            </form>
    </ul>




    <table class="table">
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

        <TBody>
            </tr>

            <?php

        include_once('conn.php');
       

     
        $start    = mysqli_real_escape_string($conn, $_GET['start_date']) ;
        $end = mysqli_real_escape_string($conn, $_GET['end_date']);
        $state = mysqli_real_escape_string($conn, $_GET['state']);
         
      
             // Get the current page number
             $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
             
             // Set the number of rows to display per page
             $num_rows_per_page = 12;
             
             // Calculate the offset
             $offset = ($page - 1) * $num_rows_per_page;
             
             // Query the database
             
            
             

             $column = mysqli_real_escape_string($conn, $_GET['column']);
             $search_term = mysqli_real_escape_string($conn, $_GET['search_term']);
      
 

             $query = "SELECT * FROM main WHERE 1=1 ";

             if (isset($start) && !empty($start) && isset($end) && !empty($end)  ) {
                 $query .= " AND payedDate BETWEEN '$start' AND '$end' ";
             }  
             
             if(isset($_GET['forCo']) && !empty($_GET['forCo'])){
              $values = $_GET['forCo'];
              // $placeholders = implode(',', $values);

              $query .= " AND forCo in ('" . implode("','", $values) . "')";

              }
             
             if (isset($column) && !empty($column) && isset($search_term) && !empty($search_term)) {
                 $query .= " AND  $column = '$search_term'";
             }
             if (isset($state) && !empty($state)) {
                 $query .= " AND  state like '$state'";
             } 
           
          
              $query2= $query;
              $query .= " order by number DESC LIMIT  $num_rows_per_page OFFSET $offset ";
              $result = mysqli_query($conn, $query);
             

             // Loop through the rows and display them
             while ($row = mysqli_fetch_assoc($result)) {
               $img=$row['attached'];
               $id =$row['number'];
               $currency="";
               
               if($row['currency']=="dinar"){
                 $currency="IQD";
               }
               else{
                 $currency="$";
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
       
                    echo "<tr>
                       <td  style='text-align: center' >". $row["number"] . " </td>
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
                         <input class='btn btn-sm btn-info text-white' type='submit' width value='Update'>
                         </form>
                         </td>
                       <td >
       
                       <button class='btn btn-sm btn-danger' style='background-color:#E67676' onclick='createPopup($id)'>Delete</button>
       
                       </td>
                       
                       
                   </tr>
                   
                 
       
                   "
                   ; 
             }
             
             echo '
             
             
             </TBody>
             </table>';
             
           // Calculate the total number of pages
      $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, $query2)) / $num_rows_per_page);
      
      // Display the pagination links
    
      echo "<nav aria-label='Page navigation'>";
      echo "<ul class='pagination'>";
      
      // Previous page link
      if ($page > 1)  
      {
          echo "<li class='page-item'>";
          echo "<a class='page-link' href='?page=" . ($page - 1) . "&start_date=$start&end_date=$end&column=$column&search_term=$search_term&state=$state' aria-label='Previous'>";
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
      echo "<a class='page-link' href='?page=$i&start_date=$start&end_date=$end&column=$column&search_term=$search_term&state=$state'>$i</a>";
      echo "</li>";
  }
}

// Next page link
if ($page < $total_pages) {
  echo "<li class='page-item'>";
  echo "<a class='page-link' href='?page=" . ($page + 1) . "&start_date=$start&end_date=$end&column=$column&search_term=$search_term&state=$state' aria-label='Next'>";
  echo "<span aria-hidden='true'>&raquo;</span>";
  echo "<span class='sr-only'>Next</span>";}
        ?>




        </TBody>
    </table>


</body>

</html>
<script>
function createPopup(id) {

    if (confirm("Are you sure to delete!")) {
        window.location.href = "delete.php?id=" + id + "";

    }


}
</script>