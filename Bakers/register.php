<!-- <?php
include("connection.php")
?> -->


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Surname</span>
            <input type="text" placeholder="Enter your surname" name="surname"  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email"  required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" name="phone"  pattern="[0-9]{10}">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password"  required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword"  required>
          </div>
        </div>
      
        <div class="button">
          <input type="submit" class="button" value="Register" name="login"  required>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<!-- <?php
// error_reporting(0);
if (isset($_POST['login'])) {

  $fname=$_POST['name'];
  $lname=$_POST['surname'];
  $email=$_POST['email'];
  $contact=$_POST['phone'];
  $pass=$_POST['password'];
  $cpass=$_POST['cpassword'];
  
 


 

  $sql= "INSERT INTO register(name,surname,email,phone,password,cpassword)  VALUES('$fname','$lname','$email','$contact','$pass','$cpass')";
  $data= mysqli_query($conn,$sql);

  if($data){
    echo "<script>alert('Data Insert Successfully')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/finseve/login.php"/>
    <?php
  }
  else{
    echo "data do not insert";

}
}



?> -->