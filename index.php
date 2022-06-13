<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="shortcut icon" type="image/png" href="images/LogoSample_ByTailorBrands.jpg">
    
    <title>Home</title>
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
    .img
    {
  background: url('images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
  z-index:0;
}
.center .title{
  color: #fff;
  font-size: 45px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 38px;
  font-weight: 600;
  font-family: cursive;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: auto;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;
}
.btns button:last-child:hover{
  background: none;
  color: #fff;
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height:100%;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.pop-btn
    {
      
      text-align: center;
      color: #fff;
      letter-spacing: 1px;
      border: none;
      background: rgb(88, 190, 88);
      cursor: pointer;
      padding:10px;
      border-radius: 4px;
      text-decoration: none;
      box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
    }
    .pop-btn:hover
    {
      background: rgb(4, 104, 37);
    }
.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: rgb(165, 16, 16);
}
.popup .close:hover {
  color: #f80808;
}
.popup .content {
  height: 80px;
  overflow: auto;
}


    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .title h4
      {
          display: none;
      }
      .center{
  z-index:0;  
}

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
    
        <li class="active"><a href="index.php">Home</a></li>
		<li><a href="service.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
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
  <div class="img"></div>
  <div class="center">
    <div class="title"><h2 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Welcome To Glamour Salon & Spa</h2></div>
    <div class="sub_title"><p style="font-family: cursive;">Let's Talk Hair, Let's Talk Relaxation</p></div>
    <div class="btns">
      <a href="service.php" ><button>What We Offer</button></a>
      <a  href="#popup1"><button>Book An Appointment</button></a>
    </div>
  </div>

  <div id="popup1" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content" style="text-align: center;">
    <h3>Please sign in to book with us! </h3><br>
    <a  href="signin.php" class="pop-btn">OK</a>
    </div>
    </div>
    </div>
  

    <!--Footer-->
    <div id="footer" style="margin:0;">
        <div class="bottom" >
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

//Close the dropdown if the user clicks outside of it
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