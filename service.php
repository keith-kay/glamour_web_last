<?php
/*session_start();
  include "validatelogin.php";
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("Location: signin.php");
}

  if (isset($_SESSION['name'])) {
    header('Location:signin.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="shortcut icon" type="image/png" href="images/LogoSample_ByTailorBrands.jpg">

    <title>Services</title>
</head>

<body>
  <style>

* {
  box-sizing: border-box;
}

    .logo
    {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: auto;
    float:left;
    margin:0;
    }
    .servicecont h2
    {
      text-align: center;
      font-size: 40px;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: 1.2px;
      color: rgb(20, 18, 18);
    }
    .servicecont h3
    {
      text-align: center;
      font-family: cursive;
      font-size: 28px;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: 1.2px;
      color: rgb(20, 18, 18);
    }
        /* Float four columns side by side */
    .column {
      float: left;
      width: 25%;
      padding: 0 10px;

    }

    /* Remove extra left and right margins, due to padding */
    .row
    {
      margin: 0 -5px;
      margin-top: 20px;
      justify-content: center;

    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .title h4
      {
          display: none;
      }

    }
    @media screen and (max-width: 1350px)
    {
      .column
      {
        width: 50%;
        display: block;
        margin-bottom: 20px;
      }
      .card
   {
     width: 400px;
     margin: 10px auto;
   }
    }
    @media screen and (max-width: 830px)
    {
      .column
      {
        width: 50%;
        display: block;
        margin-bottom: 20px;
      }
      .card
   {
     width: 300px;
     margin: 10px auto;
   }
  }
   @media screen and (max-width: 650px)
    {
      .column
      {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
      .card
   {
     width: 400px;
     margin: 10px auto;
   }
    }
    /* Style the counter cards */
.card
{
  box-shadow: 0 4px 8px 0 rgba(58, 26, 26, 0.2);
  transition: 0.3s;
  padding: 16px;

}

.card:hover
{
  box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
  background: teal;
}

.container
{
  padding: 2px 16px;
}
.card h4
{
      margin-bottom: 12px;
      font-size: 18px;
      font-weight: 400;
      text-align: center;
      color: rgb(20, 18, 18);
      font-family: Arial, Helvetica, sans-serif;
}
.card img
{
  border-radius: 2px;
  box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
}
.card a
{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:  3px;
  box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
  cursor: pointer;
  border-radius:2px;
}
.card a:hover
{
  box-shadow: 0 8px 16px 0 rgba(224, 20, 20, 0.2);
  background: #00534f;
}
.servicebtn
 {
      display: flex;
      justify-content: center;
      align-items: center;
}
     button
{
      width: 200px;
      padding: 15px 0;
      text-align: center;
      justify-content: center;
      margin: 20px 10px;
      border-radius: 25px;
      font-weight: bold;
      border: 2px solid #009688;
      color: #fff;
      background: #000;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      cursor: pointer;
}
    button:hover
{

    background: teal;

}

      </style>

    <!--content-->
   <div class="navscroll">
    <nav>
      <div >
      <img class="logo" src="images/LogoSample_ByTailorBrands.jpg">
      </div>
      <div class="title">
        <h4>Glamour Salon n Spa</h4>
      </div>
      <ul class="navlinks">
        <li><a href="index.php">Home</a></li>
		    <li class="active"><a href="service.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Inquiries</a></li>
        <li><a href="faqs.php">FAQs</a></li>
		    <li><a href="signin.php">Book Now</a></li>
      </ul>
    <div class="dropdown">
      <img onclick="myFunction()"   class="dropbtn" style="width:20px; height:20px; margin-right:32px;" src="images/RR.png">
      <div id="myDropdown" class="dropdown-content" >
      <a href="admin/adminlogin.php"><u>Admin</u></a>
      <a href="employee/userlogin.php"><u>Employee</u></a>
      <a href="cashier/cashierlogin.php"><u>Cashier</u></a>
    </div>
</div>

    <div class="mobile">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
  </nav>
  </div>

  <script src="carproj.js"></script>

  <!--main body content-->
    <div id="bodycontent">
    <h1>Welcome To Glamour Salon & Spa </h1>
    <p>For the best customer services offered at expertise level. <br>
        Swing by for a makeover!</p>


    <div id="content">
      <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images/camille-brodard-VxAwTeiqDao-unsplash.jpg" style="width: 100%; height:80vh;">
      </div>

      <div class="mySlides fade">
        <img src="images/jared-rice-PibraWHb4h8-unsplash.jpg" style="width:100%; height:80vh;">
      </div>

      <div class="mySlides fade">
        <img src="images/beauty-salon-g45fcbb033_1920.jpg" style="width: 100%; height:80vh;">
      </div>

      <div class="mySlides fade">
        <img src="images/wellness-ge5fc36791_1920.jpg" style="width: 100%; height:80vh;">
      </div>
      <div class="mySlides fade">
        <img src="images/christin-hume-0MoF-Fe0w0A-unsplash.jpg" style="width: 100%; height:80vh;">
      </div>

      </div>

      <div style="text-align:center;padding: 15px;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
</div>



<div class="servicecont">
  <h2>What We Offer</h2>
  <br> <br>
  <hr style="display: none;">

  <h3 ><u style="font-family: cursive;"> Hair Care</u></h3>

  <div class="row" >
    <div class="column" >

      <div class="card" >
        <img src="images/hairdresser-g1e4d692ca_1920.jpg" alt="Avatar" style="width:100%">

          <br><h4><b>Cutting</b></h4>
<p>Executive and elegant <br>hair cuts.</p>
<i><p><h4>KSH 2000.00</h4></p></i>
          <a href="#popup1">Book Now</a>

      </div>
      </div>


      <div class="column">

        <div class="card">
          <img src="images/haircoloring5.jpg" alt="Avatar" style="width:100%">

            <br><h4><b>Coloring</b></h4>
            <p>Time to explore different <br>captivating hair dyes!</p>
            <i><p><h4>KSH 2000.00</h4></p></i>
            <a href="#popup1">Book Now</a>

        </div>
        </div>

        <div class="column">

          <div class="card">
            <img src="images/hairstyling2.jpg" alt="Avatar" style="width:100%">

              <br><h4><b>Styling</b></h4>
              <p>Curls, perm, updos.<br>A sense of hair touch!</p>
              <i><p><h4>KSH 2000.00</h4></p></i>
              <a href="#popup1">Book Now</a>

          </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="images/adam-winger-KVVjmb3IIL8-unsplash.jpg" alt="Avatar" style="width:100%">

                <br><h4><b>Hair Dressing</b></h4>
                <p>Your hair is our canvas.<br>We'll style, you'll smile!</p>
                <i><p><h4>KSH 2000.00</h4></p></i>
                <a href="#popup1">Book Now</a>
            </div>
          </div>
        </div>
      </div>

 <!--Skin Care Segment-->
  <div class="servicecont">
     <br> <br>
   <hr style="display: none;">
        <h3 ><u style="font-family: cursive;"> Skin Care</u></h3>

        <div class="row" >
          <div class="column" >
            <div class="card" >
              <img src="images/facials2.jpg" alt="Avatar" style="width:100%">

                <br><h4><b>Facials</b></h4>
                <p>Rejuvenating facials to <br>give a glowing skin!</p>
                <i><p><h4>KSH 2500.00</h4></p></i>
                <a href="#popup1">Book Now</a>
            </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="images/element5-digital-ceWgSMd8rvQ-unsplash.jpg" alt="Avatar" style="width:100%">
                  <br><h4><b>Makeup</b></h4>
                  <p>If you're sad, add <br>more lipstick and attack!</p>
                  <i><p><h4>KSH 2500.00</h4></p></i>
                  <a href="#popup1">Book Now</a>
              </div>
            </div>

              <div class="column">
                <div class="card">
                  <img src="images/essential-oils-g509569985_1920.jpg" alt="Avatar" style="width:100%">
                    <br><h4><b>Aromatherapy</b></h4>
                    <p>Essential oils make <br>everything better.</p>
                    <i><p><h4>KSH 2500.00</h4></p></i>
                    <a href="#popup1">Book Now</a>
                </div>
              </div>

                <div class="column">
                  <div class="card">
                    <img src="images/spa-product-g982cdc843_1920.jpg" alt="Avatar" style="width:100%">
                      <br><h4><b>Cosmetics</b></h4>
                      <p>There is no cosmetic for <br>beauty like happiness.</p>
                      <i><p><h4>KSH 2500.00</h4></p></i>
                      <a href="#popup1">Book Now</a>
                  </div>
                </div>
              </div>
<!--Nail & Foot Care Segment-->
            <div class="servicecont">
              <br> <br>
                <hr style="display: none;">
                  <h3 ><u style="font-family: cursive;"> Nail & Foot Care</u></h3>

                  <div class="row" >
                    <div class="column" >
                      <div class="card" >
                        <img src="images/pedicure.gif" alt="Avatar" style="width:100%">

                          <br><h4><b>Foot Scrub</b></h4>
                          <p>Refreshing massage to <br>relax your muscles!</p>
                          <i><p><h4>KSH 1500.00</h4></p></i>
                          <a href="#popup1">Book Now</a>
                      </div>
                      </div>

                      <div class="column">
                        <div class="card">
                          <img src="images/pedicure2.jpg" alt="Avatar" style="width:100%">
                            <br><h4><b>Pedicure</b></h4>
                            <p>Life is too short to <br>have a flaky foot!</p>
                            <i><p><h4>KSH 1500.00</h4></p></i>
                            <a href="#popup1">Book Now</a>
                        </div>
                      </div>

                        <div class="column">
                          <div class="card">
                            <img src="images/manicure2.jpg" alt="Avatar" style="width:100%">
                              <br><h4><b>Manicure</b></h4>
                              <p>Get a manicure that <br>speaks to the world.</p>
                              <i><p><h4>KSH 1500.00</h4></p></i>
                              <a href="#popup1">Book Now</a>
                          </div>
                        </div>

                          <div class="column">
                            <div class="card">
                              <img src="images/photos-by-lanty-1_j_36G6DbY-unsplash.jpg" alt="Avatar" style="width:100%">
                                <br><h4><b>Hena Tattoo</b></h4>
                                <p>Magnificent body art <br>drawings and designs!</p>
                                <i><p><h4>KSH 1500.00</h4></p></i>
                                <a href="#popup1">Book Now</a>
                            </div>
                          </div>
            </div>

      </div>
</div>
</div>

<script>

  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
  </script>

    <!--Footer-->
    <div id="footer">
        <div class="bottom">
            <center>
              <p style="letter-spacing: 1.8px; font-size: 17px;font-weight: 300;color: #fff;">
                  &copy; Glamour Salon & Spa 2022 All Rights Reserved.
              </p>
            </center>
          </div>
    </div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
       }
     }
   }
 }
</script>
</body>
</html>
