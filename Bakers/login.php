<?php
session_start();

include 'connection.php';

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
 
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="#" method="post">
        <input type="email" placeholder="Enter your email" name="email"  required>
        <input type="password" placeholder="Enter your password" name="password" required>
        <a href="register.php">Forgot password?</a>
        <input type="submit" class="button" value="login" name="login"  required>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
            <a href="register.php">Sign UP</a>
        </span>
      </div>
    </div>

    </body>
</html>


<?php

if(isset($_POST['login'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE email ='$username' && password='$password'";

    $data = mysqli_query($conn,$query);

    $total= mysqli_num_rows($data);

    if($total == 1)
    
    {
        $_SESSION['$user_name'] = $username;
        echo "<script>alert('Login Successfully')</script>";

        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/Bakers/Home.php" />
        <?php
    }
    else
    {
      echo "<script>alert('Login Failed')</script>";

}

}

?>