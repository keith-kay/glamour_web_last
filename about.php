
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
    
    <title>About Us</title>
</head>

<body>
  <style>
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
      font-size: 30px;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: 1.2px;
      color: rgb(20, 18, 18);
    }

.column 
{
  float: left;
  width: 33.33333333%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after 
{
  content: "";
  display: table;
  clear: both;
}
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }


  
    .align {
            display: flex;
            align-items: center;
        }
          
        span {
            padding: 10px;
        }

    /* Style the counter cards */
.card 
{
  box-shadow: 0 4px 8px 0 rgba(58, 26, 26, 0.2);
  transition: 0.3s;
  
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
        <li><a href="service.php">Services</a></li>
        <li class="active"><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Inquiries</a></li>
        <li><a href="faqs.php">FAQs</a></li>
		<li><a href="signin.php">Book Now</a></li>
      </ul>
	  
      <div class="dropdown">
  <!-- <button onclick="myFunction()" class="dropbtn">+</button> -->
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
        <img src="images/raphael-lovaski-pxax5WuM7eY-unsplash.jpg" style="width: 100%; height:80vh;">
      </div>
      
      <div class="mySlides fade">
        <img src="images/wellness-g8e2ab28fb_1920.jpg" style="width:100%; height:80vh;">
      </div>
      
      <div class="mySlides fade">
        <img src="images/shari-sirotnak-oM5YoMhTf8E-unsplash.jpg" style="width: 100%; height:80vh;">
      </div>

      <div class="mySlides fade">
        <img src="images/beauty-salon-g2d5b7ab97_1920.jpg" style="width: 100%; height:80vh;">
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
 
    <div class="row">
        <div class="column" >
        <h2 style="text-align: left; ">Who We Are</h2>
        <p style="text-align: left; font-size: 16px; color:rgb(32, 29, 29)" f> For more than a decade, Glamour Salon & Spa has helped spa management teams drive direct bookings, reduce their dependence on manual paperwork, and exceed ownership’s expectations and ambitions.
        <br> <br> <b> Customer service and hard work are the core strands of our DNA.</b></p>
        </div>

        <div class="column ">
        <h2 style="text-align: left;">Why Choose Us</h2>
        <div class="align">
        <img  src="images/icons8-checked-checkbox-48.png" alt="">
        <span><h3 class="heading" style="text-align: left; color:rgb(32, 29, 29)">  We Win Awards </h3></span>
        </div>
        <p style="text-align: left; font-size: 16px;">Always acting as an extension of our client's marketing and sales teams, our creative and strategic initiatives have won us several awards in the salon industry.</p>
        </div>
        
        <div class="column ">
            <h2 style="text-align: left;">&nbsp; &nbsp;</h2>
        <div class="align" >
        <img  src="images/icons8-checked-checkbox-48.png" alt="">
        <span style="margin-top: 10px;"><h3 class="heading" style="text-align: left; color:rgb(32, 29, 29)" >  Salon Experience </h3></span>
        </div>
        <p style="text-align: left; font-size: 16px;">With a couple years of experience working with numerous clients and boutique, our teams know hospitality on an expertise level. <br> Many of our team members have been refered to Glamour Salon from high-end salons and spas.</p>
        </div>

      </div>

      <div class="row">
        <div class="column" >
        <h3 style="text-align: left; ">Our Mission</h3>
        <p style="text-align: left; font-size: 18px; color:rgb(32, 29, 29) ;font-family: cursive;"> To deliver a level of service found nowhere else. We strive to push the boundaries of beauty with our expertise services, 
         and dedication to our customers' well being.
          
        </div>

        <div class="column ">
        <h3 style="text-align: left;">Our Vision</h3>
        <p style="text-align: left; font-size: 18px; font-family: cursive;">It is our vision to be a spa where everyone feels comfortable and welcome.
           Our goal is that every client receives an outstanding service from the time they check in, to the time they check out.</p>
        </div>
        
        <div class="column ">
            <h3 style="text-align: left; font-family: cursive;">Our Values</h3>
        <p style="text-align: left; font-family: cursive;"> <img src="images/right-arrow.png" alt=""> &nbsp; Service Excellence.</p>
        <p style="text-align: left; font-family: cursive;"> <img src="images/right-arrow.png" alt=""> &nbsp; Passion.</p>
        <p style="text-align: left; font-family: cursive;"> <img src="images/right-arrow.png" alt=""> &nbsp; Honesty.</p>
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
                  <i>&copy; Glamour Salon & Spa 2022.</i> All Rights Reserved.
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