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
    <title>Home Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="contact.css">
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
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container content">
  <div class="row">
    <a href="https://en.wikipedia.org/wiki/Cake">
    <div class="col-sm-4">
      <div class="panel">
        <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490170457/apple-and-almond-cake_i12bux.jpg" class="img-thumbnail" alt="Image">
        <div class="box">
          <h1 id="content1-headline1">Cakes</h1>
        </div></a>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel">
        <a href="https://en.wikipedia.org/wiki/Bread#:~:text=Gluten%2Dfree%20breads%20are%20made,be%20dense%20with%20little%20aeration."><img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490245951/gluten-free-bread-rolls-nut-free-bread-rolls-pale-pete-recipes-paleo-way-seed-rolls_lthh5a.jpg" class="img-thumbnail">
        <div class="box">
          <h1 id="content1-headline2">Gluten free</h1>
        </div>
        </a>
      </div>
    </div></a>
    <div class="col-sm-4">
      <div class="panel">
      <a href="https://en.wikipedia.org/wiki/Bread#:~:text=Gluten%2Dfree%20breads%20are%20made,be%20dense%20with%20little%20aeration."><img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490245830/Gluten_Free_Bread_6_-_Copy_rtbcqq.jpg" class="img-thumbnail" alt="Image">
        <div class="box">
          <h1 id="content1-headline3">Bread</h1>
        </div>
        </a></div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-eq-height">
    <div class="col-sm-5 content2">
      <p id="content2-1">Here at The Home Bakery, baking is the passion. Come and visit - your taste buds will thank you!</p>
    </div>
    <div class="col-sm-2">
      <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490342409/dsc_0114_hgqgai.jpg" class="img-circle">
    </div>
    <div class="col-sm-5 content2">
      <p id="content2-2">We use only the finest and freshest ingredients to create pastries that will warm your heart.</p>
    </div>
  </div>
</div>

<div id="carousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490351456/carousel1.jpg">
        <div class="carousel-caption">
          <h3>100% Homemade</h3>
          <p>We make pastries at home using 100% natural ingredients</p>
        </div>
      </div>
      <div class="item">
        <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490276719/carousel2_zxje9g.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Make order</h3>
          <p>Call us and we will delivery fresh pastries to your home</p>
        </div>
      </div>
      <div class="item">
        <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490276801/carousel3_heh2hy.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>100% Homemade</h3>
          <p>We make pastries at home using 100% natural ingredients</p>
        </div>
      </div>
      <div class="item">
        <img src="https://res.cloudinary.com/dbqqjaqqa/image/upload/v1490276736/carousel4_iuwmrn.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Make order</h3>
          <p>Call us and we will delivery fresh pastries to your home</p>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- -->


<section class="contact" id="contact">
    <h2>Contact US</h2>
    <p class="para">Reach out to us for any inquiries or order.</p>
    <div class="row">
      <div class="col information">
        <div class="contact-details">
          <p><i class="fas fa-map-marker-alt"></i> 123 Campsite Avenue, Hinjewadi, Pune</p>
          <p><i class="fas fa-envelope"></i> info@homebakery.com</p>
          <p><i class="fas fa-phone"></i> (123) 456-7890</p>
          <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 11:00 PM</p>
          <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 12:00 PM</p>
          <p><i class="fas fa-globe"></i> www.homebakery.com</p>
        </div>          
      </div>
      <div class="col form">
        <!-- <form> -->
          <form action="#" method="POST">
          <input type="text" name="Name" placeholder="Name*" required>
          <input type="phone" name="Phone" placeholder="Phone*" required>
          <textarea name="Message" placeholder="Message*" required></textarea>
          <div class="button">
          <button  type="submit" class="btn" name="submit" ><input type="button" value="Send Now"></button>
          </div>
        </form>
      </div>
    </div>
  </section>


<!-- footer section start -->
<footer id="footer">
    <div class="container">
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

  
<!-- <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js'></script>
    <script src="script.js"></script> -->
  </body>
</html>





<?php
error_reporting(1);
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