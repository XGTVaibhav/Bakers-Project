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
<html>
<head>
<title>Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="home.css" />
<link rel="stylesheet" href="footer.css">

<style>
body, html {height: 100%}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("img/bakery.avif");
  min-height: 90%;
}
#contact{
  font-size: larger;
  font-weight: 900;
  box-sizing: border-box;
  margin-left: 200px;
  margin-right: 200px;
  padding: 10px;
  padding-top: 20px;
}
h1{
  text-align: center;
  font-weight: bolder;
}
p{
  text-align: center;
  font-size: large;
  font-weight: 800;
}

</style>
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
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">Home<br> Bakery</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3- w3-padding-64 w3-xlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-pink">Cakes</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-pink">Cup Cake</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-pink">Bread</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Roll Cake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">20$</span></h1>
      <hr>
   
      <h1><b>Smoothi Cake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">15.50$</span></h1>
      <hr>
      
      <h1><b>Strabeery Cake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">17.00$</span></h1>
      <hr>

      <h1><b>Chocolate Cake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">16.50$</span></h1>
      <hr>

      <h1><b>Black Forest Cake</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
      <hr>

      <h1><b>Pineapple Cake</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">$21.50</span></h1>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Vanilla Cupcake</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">13.50$</span></h1>
      <hr>
   
      <h1><b>Chocolate Cupcake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">10.00$</span></h1>
      <hr>
      
      <h1><b>Red Velvet Cupcake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">11.00$</span></h1>
      <hr>

      <h1><b>Lemon Cupcake</b> <span class="w3-right w3-tag w3-dark-grey w3-round">15.50$</span></h1>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Bruschetta</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">5.50$</span></h1>
      <hr>
   
      <h1><b>Sandwich Loaf</b> <span class="w3-right w3-tag w3-dark-grey w3-round">8.50$</span></h1>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">9.50$</span></h1>
      <hr>
      
      <h1><b>Cream White Bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">10.50$</span></h1>
    </div><br>

  </div>
</div>




<!-- Contact Section -->
<div class="w3-container w3-padding-64" id="contact">
  <h1>ORDER NOW</h1><br>
  <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
  <form action="#" method="POST">
    <input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name">
    <input class="w3-input w3-padding-16" type="text" placeholder="Cake" required name="Cake">
    <input class="w3-input w3-padding-16" type="text" placeholder="Address" required name="Address">
    <input class="w3-input w3-padding-16" type="date" placeholder="Date" required name="Date">
    <input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements"  name="Message" required>
    <button type="submit" name="submit" class="btn" value="password">submit</button>
  </form>
</div>

<hr> 

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-pink", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-pink";
}
document.getElementById("myLink").click();
</script>



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
</body>
</html>




<?php
error_reporting(1);
if (isset($_POST['submit'])) {

  $name=$_POST['Name'];
  $Cake=$_POST['Cake'];
  $Address=$_POST['Address'];
  $Date=$_POST['Date'];
  $Message=$_POST['Message'];


  $sql= "INSERT INTO `order`(`Name`,`Cake`,`Address`,`Date`,`Message`) VALUES('$name','$Cake','$Address`','$Date','$Message')";
   $data= mysqli_query($conn,$sql);

  if($data){
    echo "Record Updated Successfully";
    
    
  }
  else{
    echo "data do not insert";
}
}

?>