

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: rgb(2,0,36);
background: -moz-radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
background: -webkit-radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#020024',endColorstr='#00d4ff',GradientType=1);">


<div class="container" style="margin-top:18%; color:white;">
  <div class="row h-300" >
    <div class="col-12 d-flex align-items-center justify-content-center">
      <form action="login.php" method="post" width="1000px">
  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-sm btn-block btn-light">Login</button>
  <br>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
        <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
      </form>
    </div>
  </div>
</div>


    
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "finance");

if(isset($_POST['username']) && isset($_POST['password'])) {
    // Connect to the MySQL database
   
    // Retrieve the submitted username and password
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    // Hash the password
    // $password = password_hash($password, PASSWORD_DEFAULT);


        
        session_start();

    // Prepare the statement
    $stmt = $conn->prepare("SELECT * FROM admin WHERE userName = ? AND password = ?");
    // Bind the parameters
    $stmt->bind_param('ss', $username, $password);
    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        // Login is successful
        // Set a session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;
        //set a cookie for remember me option
        if(isset($_POST['remember'])){
            setcookie('logged_in', 'true', time() + (86400 * 10), "/");
        }
        // Redirect the user to a protected page

        header('Location: view.php');
        exit;
    } else {

        // Login is not successful
        // Display an error message
        
      echo"<script>    alert('incorect'); </script>";
    }
}
?>
