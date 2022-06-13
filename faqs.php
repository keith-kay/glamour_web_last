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

    .alert {
  padding: 20px;
  background-color: #ff3333;
  color: white;
  border-radius:5px;
}
.exclamation {
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
  

/* Style inputs */
label
{
    font-family: cursive;
    font-weight: bold;
    font-size: 17px;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(58, 26, 26, 0.2);
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(58, 26, 26, 0.2);
}

input[type=text]:hover
{
    border: 1px solid crimson;
}
 textarea:hover
{
    border: 1px solid crimson;
}
input[type=submit]:hover {
  background-color: crimson;
}

/* Style the container/contact section */
#content {
  border-radius: 5px;
  background: #fff;
  padding: 10px;

}
#content p
{
    font-family: cursive;
    font-size: 20px;
    text-decoration: none;
}
/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
  background: #fff;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/*FAQs stylesheet page*/

/*centering the section page*/
section
{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.faqscont
{
  width: 100%;
  max-width: 80rem;
  margin: 0 auto;
  padding: 0 1.5rem;
}
.child
{
  background-color: #283042;
  border-radius: .4rem;
  margin-bottom: 1rem;
  padding: 10px;
  box-shadow: .5rem 2px .5rem rgba(0,0,0,.1);
}
.parent-link
{
  font-size: 14px;
  color: rgba(255,255,255,.8);
  text-decoration: none;
  background-color: #283042;
  border-radius: .4rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
}
.parent-link i
{
  columns: crimson;
  padding: .5rem;
}
.parent-link .fa-minus
{
  display: none;
}
.answer
{
  max-height: 0;
  overflow: hidden;
  background-color: #212838;
  transition: max-height 600ms;
  
}


.answer p
{
  font-size: 14px;
  color: rgba(255,255,255,.6);
  padding: 2rem;
}
.child:target .answer
{
max-height: 20rem;
}
.child:target .parent-link .fa-plus
{
  display: none;
}
.child:target .parent-link .fa-minus
{
  display: block;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
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
    
        <li><a href="index.php">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contactus.php">Inquiries</a></li>
        <li class="active"><a href="faqs.php">FAQs</a></li>
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
    <div id="bodycontent" style="background: #fff;">
  
    
    <div id="content">
        <div style="text-align:center">
            <h2 style="font-size: 50px;">FAQs</h2>
            <p>Have questions? We're here to help!</p>
          </div>
        
        
        <section>
        <div class="faqscont">
            <div class="parent">
                <div class="child" id="1stquery">
                    <a class="parent-link" href="#1stquery">
                    What if I have any health concerns? Can I request a certain massage therapist when I book online? 
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>Yes, you can!  There is a drop-down menu on our site when you book that gives you a choice of gender, 
                            or specific massage therapist by name.
                        </p>                   
                        </div>
                </div>

                <div class="child" id="2ndquery">
                    <a class="parent-link" href="#2ndquery">
                    What if I have any health concerns?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>Kindly notify our Spa team at the time of making your spa reservation, else, just prior to your treatment. 
                            Please note it is extremely important to advise if you are pregnant, suffer from cardiovascular disorders such as cardiac ailments or high blood pressure,
                            have recently undergone surgery or have any implant or are suffering from skin diseases.
                        </p>                   
                        </div>
                </div>

                <div class="child" id="3rdquery">
                    <a class="parent-link" href="#3rdquery">
                    What type of skin care products do you use in Spa treatment?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>We have taken great pains to ensure that all of our products are gentle on your skin. 
                            Where possible we use essential oils, marine and plant based products that are tested for safety and are hypoallergenic. 
                            Considering the varying skin types we offer different ranges to meet specific objectives. 
                            However please inform the Spa team if you are allergic to anything.
                        </p>                   
                        </div>
                </div>

                            
                <div class="child" id="4thquery">
                    <a class="parent-link" href="#4thquery">
                    What if I am running late for my Spa appointment?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>If you are running late for your treatment, 
                            we will still endeavor to give the best possible experience by shortening your therapy so as to be completed by the designated time booked by you. 
                            This is to ensure that the next guest is not delayed or inconvenienced. Please note that since we had booked the specific time slot just for you, 
                            we will charge the full price of the Spa therapy.
                        </p>                   
                        </div>
                </div>

                <div class="child" id="5thquery">
                    <a class="parent-link" href="#5thquery">
                    I've never been to the salon before. How will i know what stylist to choose?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>We love our stylists + their unique creativity, so we love to show their work on our Instagram pages! 
                            Click the links to check out some of their work! Also, by visiting our home page, 
                            we've listed links to each stylist's individual pages so that you're able to see even more of the magic that they create! 
                            If you still don't know who to choose by the time you make your appointment, 
                            we'd be happy to pair you with someone we feel will best suit your needs.
                        </p>                   
                        </div>
                </div>

                <div class="child" id="6thquery">
                    <a class="parent-link" href="#6thquery">
                    Can I come in for a consultation?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>Please do!  We encourage a 15 minute consultation with our stylists to get a better understanding
                            of your vision free of charge. We do ask that you still call and schedule it with our
                            front desk coordinators to allot for the time!
                        </p>                   
                        </div>
                </div>
                <div class="child" id="7thquery">
                    <a class="parent-link" href="#7thquery">
                    How will I know what services I will need to book?
                       <i class="fa fa-plus" aria-hidden="true"></i>
                       <i class="fa fa-minus" aria-hidden="true"></i>
                    </a>
                    <div class="answer">
                        <p>Each new guest will go through a pre-consultation screening. This can happen one of two ways... You can either
                            email us pictures of your current hair along with your goal hair photo (so that our team can assess and 
                            determine which services will get you closest to your goal hair) -OR- we can schedule an 
                            in-salon consultation before booking your appointment. 
                        </p>                   
                        </div>
                </div>

            </div>
        </div>
    </section>
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


    <!--Footer-->
    <div id="footer">
        <div class="bottom">
            <center>
              <p style="letter-spacing: 1.8px; font-size: 17px;font-weight: 300;color: #fff;">
                  <i>&copy; Glamour Hotel & Spa 2022.</i> All Rights Reserved.
              </p>
            </center>
          </div>
    </div>
 
    
</body>
</html>