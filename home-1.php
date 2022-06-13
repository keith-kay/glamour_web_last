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
 

   session_start();
   include "config.php";
   if (isset($_SESSION['name'])) {
    $sql = "SELECT * FROM glm_db_users ";
    $query = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($query);
   if($row['glm_db_users_name'] == $_SESSION['name'] && $row['glm_db_users_password']=='password')
   {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Account is deactivated, contact the Admin!')
    window.location.href='signin.php';
    </SCRIPT>");
   }
   else{
   
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/LogoSample_ByTailorBrands.jpg">
    
    <title>Welcome</title>
</head>

<body>
  <style>

* {
  box-sizing: border-box;
}
/* */

.ticket
 {
  position: relative;
  box-sizing: border-box;
  width: 600px;
  height: 642px;
  margin: 150px auto 0;
  margin-top: 15px;
  padding: 20px;
  border-radius: 10px;
  background: #FBFBFB;
  box-shadow: 2px 2px 15px 0px #AB9B0D;
}
.ticket .close 
{
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: rgb(165, 16, 16);
}
.ticket__content 
{
  box-sizing: border-box;
  height: 100%;
  width: 100%;
  border: 6px solid #D8D8D8;
}

.ticket__text 
{
  width: 400px;
  font-family: "Times New Roman", Times, serif ;
  font-size: 3rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #000;
  
}
.my_tick
{
  font-family:"Copperplate",  fantasy;
  text-align: left;
  float:left;
  font-style: normal;  
  letter-spacing:5px;
}
.edit
{
    background: rgb(36, 100, 36);
    color: #f1f1f1;
    padding: 5px 13px;
    border-radius:3px;
    text-align: center;
    margin-top:30px;
}
.edit:hover
{
    color: rgb(36, 100, 36);
    background: #f1f1f1;
    padding: 3px 10px;
    border: 2px solid rgb(36, 100, 36);

}

/* */
.servicebooking
{
  letter-spacing:5px;
  font-family:"Papyrus",  fantasy;
  
}
.alert 
{
  padding: 20px;
  background-color: #ff3333;
  color: white;
  border-radius:5px;
}
.exclamation
 {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
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
  margin: 60px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  height:85%;
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
  height: 100%;
  overflow: auto;
}    

.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
  margin-top: 35px;
  text-align: center;
  font-family: cursive;
}

.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  margin-bottom:20px;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
form .input-box .name
{
  font-weight: bold;
  text-align: left;
  float:left;
  
}
.icon
{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    position: absolute;
    right: 45%; 
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: teal;
  cursor: pointer;
}
.input-box.button input:hover{
  background: crimson;
}

form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

.category
{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  margin-bottom:20px;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
}

@media screen and (max-width: 600px) {
      .img
      {
          margin-bottom: 20px;
      }
      .wrapper{
  position: relative;
  max-width: 380px;
  width: 100%;
  margin-top: 50px;
  padding: 34px;
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
    
        <li><a href="logout.php" style="margin-left: 480px; ">Logout</a></li>
        <li>
          <?php
          include 'config.php';
          if(isset($_SESSION['name']))
          {

            $name = $_SESSION['name'];
            $query= "SELECT glm_db_users_id FROM glm_db_users WHERE glm_db_users_name='$name'";
            $id= mysqli_query($db, $query);
            $newid = mysqli_fetch_assoc($id);

            $sql = "SELECT * FROM glm_db_appointments WHERE glm_db_appointments_id = (SELECT MAX(glm_db_appointments_id) FROM glm_db_appointments) AND glm_db_appointments_user= $newid[glm_db_users_id] ";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {                                     
            echo "<a href=#popup onclick=Ticket(); >						
            <span>Ticket</span>
            </a>";
          }
          }
          }

          ?>
        </li>
      </ul>
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
    <p>Hi <strong><?php echo $_SESSION['name'] ; ?></strong> &nbsp; book a service with us and experience what we have to offer.</p>


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
  <h2>Book Now</h2>
  <br> <br>
  <hr style="display: none;">
  <!--Ticket Pop-Up Modal-->
  <div id="div_print" class="recent-payments">
                <div id="popup" class="overlay">       
                        <div class="ticket" id= "ticket">
                        <a class="close" href="#">&times;</a>
                        <div class="ticket__content" style="text-align: center;">          
                          
                        <img class="icon" src="images/LogoSample_ByTailorBrands.jpg"><br><br>
                        <br><p class="ticket__text">Glamour Salon & Spa</p><br>
                          <p class="ticket__text">Ticket</p>
                       <!--fetch ticket data-->
                       <?php
                       include 'config.php';
                      
                       if(isset($_SESSION['name']))
                       {
                        $name = $_SESSION['name'];
                        $query= "SELECT glm_db_users_id FROM glm_db_users WHERE glm_db_users_name='$name'";
                        $id= mysqli_query($db, $query);
                        $newid = mysqli_fetch_assoc($id);
                        
                        //get the service category ID
                        $query_check = "SELECT glm_db_appointments_servicecategory FROM glm_db_appointments WHERE glm_db_appointments_user= $newid[glm_db_users_id] ";
                        $cat = mysqli_query($db, $query_check);
                        $category = mysqli_fetch_assoc($cat);
                        
                        //use category ID to get service category
                        $query_sql = "SELECT glm_db_services_name FROM glm_db_services WHERE glm_db_services_id = $category[glm_db_appointments_servicecategory]";
                        $service = mysqli_query($db, $query_sql);
                        $servicerresult = mysqli_fetch_assoc($service);
                        


                        $sql = "SELECT *,
                        glm_db_services.glm_db_services_price
                         FROM glm_db_appointments 
                         JOIN glm_db_services
                         ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id 
                         WHERE glm_db_appointments_id = (SELECT MAX(glm_db_appointments_id) FROM glm_db_appointments) AND glm_db_appointments_user= $newid[glm_db_users_id] ";
                        $result = $db->query($sql);
                        //Output through all rows iteration
                        if ($result->num_rows > 0)
                       {
                        while($row = $result->fetch_assoc()) 
                       {
                        
                        
                        echo "<p class='my_tick'> Ticket Number:" . $row["glm_db_appointments_id"] . "</p>";
                        echo "<p  class='my_tick' style='text-align:right;float:right;'>Booked By:" . $name . "</p><br><br>";
					              echo "<p  class='my_tick' style='position:absolute; top:50% transform:translate(-50%, -50%); left:28%; font-weight:normal;'>Service Provider:" . $row["glm_db_appointments_serviceprovider"] . "</p><br><br>";
                        echo "<p class='my_tick'  style='position:absolute; top:50% transform:translate(-50%, -50%); left:35%; font-weight:normal;'> Price:" . $row["glm_db_services_price"] . "</p>";
					            	echo "<br><br><p class='servicebooking'>Service Booked:" . $row["glm_db_appointments_servicename"] . "</p>";
                        echo "<br> <p class='servicebooking'>Service Booked Category:" . $servicerresult["glm_db_services_name"] . "</p>";
						
                        echo "<p  class='my_tick' style='text-align:right;float:right;'>Time Booked:" . $row["glm_db_appointments_time"] . "</p>";
                        echo "<p class='my_tick'> Date Booked:" . $row["glm_db_appointments_date"] . "</p>";

                        
                        
						
                        echo "<br><p class='servicebooking'><br>";
                        echo  'Please Make Sure you arrive 30 minutes earlier to avoid inconveniences! <br>' ;
                        echo  'Always there, swing by for a makeover!';
                        echo "</p>";
                        echo "<img class='icon' src='images/LogoSample_ByTailorBrands.jpg'><br><br>";
                        echo "<td><button onclick=printdiv('ticket') class=edit>Print</button></td>";
                        
                      }

                       }

                       }

                       ?>
                        </div>
                </div>
              </div> 
</div>

   


             <!--Appointment Pop-Up Modal-->  
            <div id="popup1" class="overlay">
              <div class="popup">
                <a class="close" href="#">&times;</a>
                  <div class="content" style="text-align: center;">
          <!--appointments form-->
      <div class="wrapper">
      <img class="icon" src="images/LogoSample_ByTailorBrands.jpg">
      <br><br>
      <h2>Book Appointment</h2>
      <form action="validatelogin[1].php" method="post">
      <?php if (isset ($_GET['error']))
                {?>
              <div class="alert ">
                <span class="exclamation" >&#33;</span>
                <strong><?=$_GET['error']?></strong>
              </div>  
                <?php } ?>
				<div class="input-box">
          <input type="date" id="thedate" placeholder="Pick A Date"  name="date">
        </div>
          <div class="input-box">
          <select name="time" id="time" class="category">
          <option value="" disabled selected>Select Time</option>
              <option value="08:00 - 09:00HRS" class="input-box">08:00 - 09:00HRS</option>
                <option value="09:00 - 10:00HRS" class="input-box">09:00 - 10:00HRS</option>
              <option value="10:00 - 11:00HRS" class="input-box">10:00 - 11:00HRS</option>
              <option value="11:00 - 12:00HRS" class="input-box">11:00 - 12:00HRS</option>
              <option value="12:00 - 13:00HRS" class="input-box">12:00 - 13:00HRS</option>
              <option value="13:00 - 14:00HRS" class="input-box">13:00 - 14:00HRS</option>
              <option value="14:00 - 15:00HRS" class="input-box">14:00 - 15:00HRS</option>
              <option value="15:00 - 16:00HRS" class="input-box">15:00 - 16:00HRS</option>
              <option value="16:00 - 17:00HRS" class="input-box">16:00 - 17:00HRS</option>
            </select>
        </div>
        
        <div class="input-box">
          <select name="category" id="category" class="category">
          <option value="" disabled selected>Select Category</option>
              <option value="Hair Care" class="input-box">Hair Care</option>
                <option value="Skin Care" class="input-box">Skin Care</option>
              <option value="Nail and Foot Care" class="input-box">Nail and Foot Care</option>
            </select>
        </div>
        <div class="input-box">
          <select name="servicename" id="servicename" class="category">
          <option value="" disabled selected>Select Service  </option>
          
            </select>
        </div>
        <div class="input-box">
          <select name="serviceprovider"  class="category">
          <option value="" disabled selected>Select Service Provider </option>
		  <option value="Frank Sinatra" class="input-box">Frank Sinatra</option>
          <option value="Patty Furniture" class="input-box">Patty Furniture</option>
          <option value="Olive Yew" class="input-box">Olive Yew</option>
          <option value="Aida Bugg" class="input-box">Aida Bugg</option>
		  <option value="Tristan Peters" class="input-box">Tristan Peters</option>
          <option value="Terry Archie" class="input-box">Terry Archie</option>
		  <option value="Arthur Jack" class="input-box">Arthur Jack</option>
          <option value="Peggy Alfie" class="input-box">Peggy Alfie</option>
            </select>

            
        </div>
        <div class="input-box button">
          <input type="Submit" name="book" value="Book Now" style="margin-top:30px;">
        </div>
        
      </form>
    </div>

          </div>
        </div>
      </div>

  <!--Hair Care Segment-->

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
  //script for validating booking per service
  var SkinCare = ["Facials","Makeup","Aromatherapy","Cosmetics"];
  var NailandFootCare = ["FootScrub","Manicure","Pedicure","Hena"];
  var HairCare = ["Cutting","Coloring","Hair Dressing","Styling"];

  document.getElementById("category").addEventListener("change", function(e){
        var select2 = document.getElementById("servicename");
        select2.innerHTML = "";
        var aItems = [];
    if(this.value == "Skin Care"){
        aItems = SkinCare;
    } else if (this.value == "Nail and Foot Care") {
        aItems = NailandFootCare;
    } else if(this.value == "Hair Care") {
        aItems = HairCare;
    }
    for(var i=0,len=aItems.length; i<len;i++) {
        var option = document.createElement("option");
        option.value= (i+1);
        var textNode = document.createTextNode(aItems[i]);
        option.appendChild(textNode);
        select2.appendChild(option);
    }
    
}, false);


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
<script>
		var todayDate = new Date();
		var month = todayDate.getMonth() + 1; 
		var year = todayDate.getUTCFullYear() - 0; 
		var tdate = todayDate.getDate(); 
		if(month < 10){
			month = "0" + month;
		}
		if(tdate < 10){
			tdate = "0" + tdate;
		}
		var maxDate = year + "-" + month + "-" + tdate;
		document.getElementById("thedate").setAttribute("min", maxDate);
		console.log(maxDate);
    </script>
	<script>
    function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
document.getElementsByClassName('edit')[0].style.visibility='hidden';
document.getElementsByClassName('del')[0].style.visibility='hidden';
window.print();
document.body.innerHTML = oldstr;
return false;
}
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
    
</body>
</html>
<?php } }else{
	header("Location: signin.php");
} ?>