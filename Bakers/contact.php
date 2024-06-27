<?php
session_start();

include("connection.php");
$userprofile = $_SESSION['$user_name'];
if($userprofile == true)
{

}
else
{
    header('location:login.php');
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Contact</title>
    <link rel="stylesheet" href="contact1.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
           <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1489836162/smaller_size_logo_wigzr1.png"></img>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="contact.php">Contact</a></li>

    
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
    



    <div class="container">
        <div class="contact_data2">
          <ul>
            <li>
              <i class="fa-solid fa-location-dot"></i>
              <strong>Location:</strong>
              <p>A505, Hinjewadi , Pune</p>
            </li>
            <li>
              <i class="fa-solid fa-envelope"></i>
              <strong>Email:</strong>
              <p>info@Homebakery.com</p>
            </li>
            <li>
              <i class="fa-solid fa-envelope"></i>
              <strong>Call:</strong>
              <p>+1 5589 55488 55s</p>
            </li>
          </ul>
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sbg!4v1666857692914!5m2!1sen!2sbg"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
        <div class="contact_data">
          <h2>Contact Us</h2>
          <form action="#" method="POST">
          <input type="text" name="Name" placeholder="Name*" required>
          <input type="number" name="Phone" placeholder="Phone*" required>
          <textarea name="Message" placeholder="Message*" required></textarea>
          <div class="button"  >
          <button  type="submit" class="btn" name="submit" ><input type="button" value="Send Now" ></button>
          </div>
          </form>
        </div>
      </div>


      
<!-- footer section start -->
<footer id="footer">
    <div class="containe">
      <div class="row">
        <div class="col-md-3">
          <a href="index.html"><img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1489836162/smaller_size_logo_wigzr1.png" alt="" height="100px" width="200px" class="img-fluid logo-footer"></a>
                    <div class="footer-about">
                    </div>

        </div>
        <div class="col-md-3">
          <div class="useful-link">
            <h1>Useful Links</h1>
            <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
            <div class="use-links">
              <li><a href="Home.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
              <li><a href="about.php"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
              <li><a href="menu.php"><i class="fa-solid fa-angles-right"></i> Menu</a></li>
              <li><a href="service.php"><i class="fa-solid fa-angles-right"></i> Service</a></li>
              <li><a href="contact.php"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
            </div>
          </div>

        </div>
                  <div class="col-md-3">
                      <div class="social-links">
            <h1>Follow Us</h1>
            <img src="./assets/images/about/home_line.png" alt="">
            <div class="social-icons">
              <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
              <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
              <li><a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Ffeed%2Fś"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
            </div>
          </div>
                  

                  </div>
        <div class="col-md-3">
          <div class="address">
            <h1>Address</h1>
            <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
            <div class="address-links">
              <li class="address1"><i class="fa-solid fa-location-dot"></i> A 205 , Hinjewadi , Pune 679338</li>
                 <li><a href=""><i class="fa-solid fa-phone"></i> +91 90904500112</a></li>
                 <li><a href=""><i class="fa-solid fa-envelope"></i> bakerymail@1234567.com</a></li>
            </div>
          </div>
        </div>
                
      </div>
    </div>

  </footer>
  


    </div>

  </section>
</body>
</html>



<?php
// error_reporting();
if (isset($_POST['submit'])) {

  $name=$_POST['Name'];
  $phone=$_POST['Phone'];
  $Message=$_POST['Message'];


  $sql= "INSERT INTO `contact`(`Name`,`Phone`,`Message`) VALUES ('$name','$phone','$Message')";
   $data= mysqli_query($conn,$sql);

  if($data){
    echo "Record Updated Successfully";
    
    
  }
  else{
    echo "data do not insert";

}
}

?>