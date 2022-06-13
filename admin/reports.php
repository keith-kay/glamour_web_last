<?php 
  /*session_start();
  include "admindb.php";
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("Location: adminlogin.php");
}

  if (isset($_SESSION['name'])) {
    header('Location:adminlogin.php');
}*/
 

?>
<style>
    .mainmenu, .submenu
 {
  list-style: none;
  padding: 0;
  margin: 0;
}


/* make ALL links (main and submenu) have padding and background color */
.mainmenu a 
{
  display: block;
  text-decoration: none;
  padding: 10px;

}

/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}


/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>admin dashboard</title>
</head>


<body>
    <div class="side-menu">
        <div class="title">
            <h1><a href="admin.php" style="color: #fff; text-decoration:none;">Glamour</a></h1>
        </div>
        <ul class="mainmenu">
        <li><a href="users.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> &nbsp Users</a></li><br>
            <br><li><a href="appointments.php" style="color: #fff; text-decoration:none;"><img src="carz.png" alt=""> &nbsp Appointments</a></li><br>
            <br><li ><a href="">&nbsp Reports</a>
            <ul class="submenu">
            <li><a href="">Appointments</a></li>
            <li><a href="">Skin Care</a></li>
            <li><a href="">Hair Care</a></li>
            <li><a href="">Nail Care</a></li>
            <li><a href="">Users</a></li>
            </ul>
            </li><br>
            <br><li><a href="admin.php?logout='1'" style="color: #fff; text-decoration:none;"> <img src="logout.png" alt=""> &nbsp Logout</a></li><br>  
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
               <!--Admin adds a new user-->
               
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">  
                   
                  <h3>Hair care</h3>
                    </div>
                        <div class="icon-case">
                            <img src="../images/hair-spray.png"/>
                            <?php
                            include 'admindb.php';
                            //count reocrds in the hair category
                            $query= "SELECT * FROM glm_db_appointments WHERE glm_db_appointments_servicecategory=1";
                            $query_run = mysqli_query($db, $query);
                            $row = mysqli_num_rows($query_run);
                            echo "<h2> $row </2> <br>"  ;
                            
                            ?>    
                        </div>
                    </div>
                <div class="card">
                    <div class="box">
               <h3>Skin Care</h3>
            </div>
                <div class="icon-case">
                    <img src="../images/skincare.png"/>
                    <?php
                            include 'admindb.php';
                            //count reocrds in the hair category
                            $query= "SELECT * FROM glm_db_appointments WHERE glm_db_appointments_servicecategory=2";
                            $query_run = mysqli_query($db, $query);
                            $row = mysqli_num_rows($query_run);
                            echo "<h2> $row </2> <br>"  ;
                            
                            ?> 
                      </div>
                </div>
            <div class="card">
                 <div class="box">     
            <h3>Nail And Foot Care</h3>
                </div>
                    <div class="icon-case">
                      <img src="../images/nail-file.png"/>
                      <?php
                            include 'admindb.php';
                            //count reocrds in the hair category
                            $query= "SELECT * FROM glm_db_appointments WHERE glm_db_appointments_servicecategory=3";
                            $query_run = mysqli_query($db, $query);
                            $row = mysqli_num_rows($query_run);
                            echo "<h2> $row </2> <br>"  ;
                            
                            ?> 
          </div>
        </div>
    </div> 
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                      <h3>Appointments</h3> <br>
                      <button onclick="Show();" class="edit">View</button>
                  </div>
                    </div>


                <div class="card">
                    <div class="box">
                      <h3>Appointments Category</h3> <br>
                      <button onclick="hair();" class="edit">Hair</button> &nbsp;
                      <button onclick="skin();" class="edit" >Skin Care</button>&nbsp; 
                      <button onclick="nail();" class="edit">Nail</button>
                  </div>
                 
                    </div>

                    <div class="card">
                    <div class="box">
                      <h3>Users</h3> <br>
                      <button onclick="User();" class="edit">View</button>
                  </div>
                  
                    </div>


                        </div>
                    
<!-- BOOKINGS MADE IN GLAMOUR SALON SYSTEM-->
                <div class="content-2">

                   <div id="booking"class="recent-payments" style="display:none;">
                            <div class="heading">
                                <h2>Total Appointments In Glamour Salon</h2>
                            </div>

                    <div class="search">
                        <form action="bookingsearch.php" action="post">
                            <label for="Date_From">Search using Date</label>
				                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"  /><br>
                                    <br><button type="submit" class="edit" name="search">Search</button>
                                </form>
                            </div>
                        <table>
                            <tr>                                        
                    <th>Booked By</th> 
                    <th>Service Category</th>
                    <th>Date</th> 
                    <th>Time</th>
                    <th>Service Name</th>
                            </tr>
                                                
                        <?php                        
                   // Check dbection
                   include 'admindb.php';
                   $sql = "SELECT glm_db_users.glm_db_users_name,
                                  glm_db_appointments.glm_db_appointments_date,
                                  glm_db_appointments.glm_db_appointments_time,
                                  glm_db_appointments.glm_db_appointments_servicename,
                                  glm_db_services.glm_db_services_name
                                  FROM glm_db_appointments
                                  JOIN glm_db_users
                                  ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                  JOIN glm_db_services
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id;";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) 
                   {                                                   
                   echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td></tr><br>"; 
                   }                            
                   echo "</table>"; 

                   echo "<div> ";
                   echo "<form action=monthlybooking.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Monthly Report</button>&nbsp &nbsp";
                   echo "<select  name=month>";
                   echo"<option value=January>January</option>";
                   echo"<option value=February>February</option>";
                   echo"<option value=March>March</option>";
                   echo"<option value=April>April</option>";
                   echo"<option value=May>May</option>";
                   echo"<option value=June>June</option>";
                   echo"<option value=July>July</option>";
                   echo"<option value=August>August</option>";
                   echo"<option value=September>September</option>";
                   echo"<option value=October>October</option>";
                   echo"<option value=November>November</option>";
                   echo"<option value=December>December</option>";                   
                   echo"</select>";
                   echo "</form> ";
                   echo"</div> <br>";  
                   
                   echo "<div> ";
                   echo "<form action=yearlybooking.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Yearly Report</button>&nbsp &nbsp";
                   echo "<select  name=year>";
                   echo"<option value=2017>2017</option>";
                   echo"<option value=2018>2018</option>";
                   echo"<option value=2019>2019</option>";
                   echo"<option value=2020>2020</option>";
                   echo"<option value=2021>2021</option>";  
                   echo"<option value=2022>2022</option>";                
                   echo"</select>";
                   echo "</form> ";
                   echo"</div>"; 
                   } else { echo "0 results"; }                                          
                    ?>
                      </table>
 
                        </div>
                </div>
                </div>
                </div>

 <!-- Hair Category Report -->
                <div class="content-2">
                        <div id="hair" class="recent-payments" style="display:none;">
                            <div class="heading">
                                <h2>Hair Category Report In Glamour Salon</h2>
                            </div>

                    <div class="search">
                        <form action="hairsearch.php" action="post">
                            <label for="Date_From">Search using Date</label>
				                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"  /><br>
                                    <br><button type="submit" class="edit" name="search">Search</button>
                                </form>
                            </div>
                        <table>
                            <tr>                                        
                    <th>Booked By</th> 
                    <th>Service Category</th>
                    <th>Date</th> 
                    <th>Time</th>
                    <th>Service Name</th>
                            </tr>
                                                
                        <?php                        
                   // Check dbection
                   include 'admindb.php';
                   $sql = "SELECT glm_db_users.glm_db_users_name,
                                  glm_db_appointments.glm_db_appointments_date,
                                  glm_db_appointments.glm_db_appointments_time,
                                  glm_db_appointments.glm_db_appointments_servicename,
                                  glm_db_services.glm_db_services_name
                                  FROM glm_db_appointments
                                  JOIN glm_db_users
                                  ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                  JOIN glm_db_services
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id
                                  WHERE glm_db_services_name = 'Hair Care'";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) 
                   {                                                   
                   echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td></tr><br>"; 
                   }                            
                   echo "</table>"; 

                   echo "<div> ";
                   echo "<form action=monthlyhair.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Monthly Report</button>&nbsp &nbsp";
                   echo "<select  name=month>";
                   echo"<option value=January>January</option>";
                   echo"<option value=February>February</option>";
                   echo"<option value=March>March</option>";
                   echo"<option value=April>April</option>";
                   echo"<option value=May>May</option>";
                   echo"<option value=June>June</option>";
                   echo"<option value=July>July</option>";
                   echo"<option value=August>August</option>";
                   echo"<option value=September>September</option>";
                   echo"<option value=October>October</option>";
                   echo"<option value=November>November</option>";
                   echo"<option value=December>December</option>";                   
                   echo"</select>";
                   echo "</form> ";
                   echo"</div> <br>";   
                   
                   echo "<div> ";
                   echo "<form action=yearlyhair.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Yearly Report</button>&nbsp &nbsp";
                   echo "<select  name=year>";
                   echo"<option value=2017>2017</option>";
                   echo"<option value=2018>2018</option>";
                   echo"<option value=2019>2019</option>";
                   echo"<option value=2020>2020</option>";
                   echo"<option value=2021>2021</option>";  
                   echo"<option value=2022>2022</option>";                
                   echo"</select>";
                   echo "</form> ";
                   echo"</div>"; 
                   } else { echo "0 results"; }                                          
                    ?>
                      </table>
                        </div>
                </div>

     <!-- Skin Category Report -->
               <div class="content-2">
                        <div id="skin" class="recent-payments" style="display:none;">
                            <div class="heading">
                                <h2>Skin Category Report In Glamour Salon</h2>
                            </div>

                    <div class="search">
                        <form action="skinsearch.php" action="post">
                            <label for="Date_From">Search using Date</label>
				                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"  /><br>
                                    <br><button type="submit" class="edit" name="search">Search</button>
                                </form>
                            </div>
                        <table>
                            <tr>                                        
                    <th>Booked By</th> 
                    <th>Service Category</th>
                    <th>Date</th> 
                    <th>Time</th>
                    <th>Service Name</th>
                            </tr>
                                                
                        <?php                        
                   // Check dbection
                   include 'admindb.php';
                   $sql = "SELECT glm_db_users.glm_db_users_name,
                                  glm_db_appointments.glm_db_appointments_date,
                                  glm_db_appointments.glm_db_appointments_time,
                                  glm_db_appointments.glm_db_appointments_servicename,
                                  glm_db_services.glm_db_services_name
                                  FROM glm_db_appointments
                                  JOIN glm_db_users
                                  ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                  JOIN glm_db_services
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id
                                  WHERE glm_db_services_name = 'Skin Care'";
                                
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) 
                   {                                                   
                   echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td></tr><br>"; 
                   }                            
                   echo "</table>"; 

                   echo "<div> ";
                   echo "<form action=monthlyskin.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Monthly Report</button>&nbsp &nbsp";
                   echo "<select  name=month>";
                   echo"<option value=January>January</option>";
                   echo"<option value=February>February</option>";
                   echo"<option value=March>March</option>";
                   echo"<option value=April>April</option>";
                   echo"<option value=May>May</option>";
                   echo"<option value=June>June</option>";
                   echo"<option value=July>July</option>";
                   echo"<option value=August>August</option>";
                   echo"<option value=September>September</option>";
                   echo"<option value=October>October</option>";
                   echo"<option value=November>November</option>";
                   echo"<option value=December>December</option>";                   
                   echo"</select>";
                   echo "</form> ";
                   echo"</div> <br>"; 
                   
                   echo "<div> ";
                   echo "<form action=yearlyskin.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Yearly Report</button>&nbsp &nbsp";
                   echo "<select  name=year>";
                   echo"<option value=2017>2017</option>";
                   echo"<option value=2018>2018</option>";
                   echo"<option value=2019>2019</option>";
                   echo"<option value=2020>2020</option>";
                   echo"<option value=2021>2021</option>";  
                   echo"<option value=2022>2022</option>";                
                   echo"</select>";
                   echo "</form> ";
                   echo"</div>"; 
                   } else { echo "0 results"; }                                          
                    ?>
                      </table>
                        </div>

            
     <!-- Nail and Foot Care Category Report -->
     <div class="content-2">
                        <div id="nail" class="recent-payments" style="display:none;">
                            <div class="heading">
                                <h2>Nail and Foot Care Category Report In Glamour Salon</h2>
                            </div>

                    <div class="search">
                        <form action="nailsearch.php" action="post">
                            <label for="Date_From">Search using Date</label>
				                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"  /><br>
                                    <br><button type="submit" class="edit" name="search">Search</button>
                                </form>
                            </div>
                        <table>
                            <tr>                                        
                    <th>Booked By</th> 
                    <th>Service Category</th>
                    <th>Date</th> 
                    <th>Time</th>
                    <th>Service Name</th>
                            </tr>
                                                
                        <?php                        
                   // Check dbection
                   include 'admindb.php';
                   $sql = "SELECT glm_db_users.glm_db_users_name,
                                  glm_db_appointments.glm_db_appointments_date,
                                  glm_db_appointments.glm_db_appointments_time,
                                  glm_db_appointments.glm_db_appointments_servicename,
                                  glm_db_services.glm_db_services_name
                                  FROM glm_db_appointments
                                  JOIN glm_db_users
                                  ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                  JOIN glm_db_services
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id
                                  WHERE glm_db_services_name = 'Nail and Foot Care'";
                                
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) 
                   {                                                   
                   echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td></tr><br>"; 
                   }                            
                   echo "</table>"; 

                   echo "<div> ";
                   echo "<form action=monthlynail.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Monthly Report</button>&nbsp &nbsp";
                   echo "<select  name=month>";
                   echo"<option value=January>January</option>";
                   echo"<option value=February>February</option>";
                   echo"<option value=March>March</option>";
                   echo"<option value=April>April</option>";
                   echo"<option value=May>May</option>";
                   echo"<option value=June>June</option>";
                   echo"<option value=July>July</option>";
                   echo"<option value=August>August</option>";
                   echo"<option value=September>September</option>";
                   echo"<option value=October>October</option>";
                   echo"<option value=November>November</option>";
                   echo"<option value=December>December</option>";                   
                   echo"</select>";
                   echo "</form> ";
                   echo"</div>";  
                   
                   echo "<div> ";
                   echo "<form action=yearlynail.php action=post > ";
                   echo "<button type=submit name=monthly class=edit>Yearly Report</button>&nbsp &nbsp";
                   echo "<select  name=year>";
                   echo"<option value=2017>2017</option>";
                   echo"<option value=2018>2018</option>";
                   echo"<option value=2019>2019</option>";
                   echo"<option value=2020>2020</option>";
                   echo"<option value=2021>2021</option>";  
                   echo"<option value=2022>2022</option>";                
                   echo"</select>";
                   echo "</form> ";
                   echo"</div>"; 
                   } else { echo "0 results"; }                                          
                    ?>
                      </table>
                        </div>           

                <!-- USERS REPORT IN GLAMOUR SALON SYSTEM-->
                <div class="content-2">
                        <div id="users"class="recent-payments" style="display:none;">
                            <div class="heading">
                                <h2>All Users In Glamour Salon</h2>
                            </div>

                            <table>
                    <tr>
                    <th>#</th>
                    <th>Username</th> 
                    <th>Email</th> 
                    </tr>
                    
                    <?php
                                                
                   // Check dbection
                   include 'admindb.php';
                   $sql = "SELECT * FROM glm_db_users";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc() ) 
                   {
                   echo "<tr><td>" . $row["glm_db_users_id"] . "</td><td>" . $row["glm_db_users_name"]. "</td><td>" . $row["glm_db_users_email"]. "</td></tr><br>"; }
                   echo "</table>";
                   } else { echo "0 results"; }
                   
                                                
                    ?> 
                    </table>       
 
                        </div>
                </div>

            </div>
        <style>
.search input[type=text]
{
    border:none;
    background: #fff;
    padding: 10px;
    width: 50%;
}
.search button
{
    width: 60px;
    height: 40px;
    border:none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
 .search button img
{
    width: 30px;
    height: 30px;
    display: flex;
}
</style>
<script>
function Show() 
{
    var x = document.getElementById('booking');
    
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }

}

function User() 
{
    var x = document.getElementById('users');
    
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }

}

function hair() 
{
    var x = document.getElementById('hair');
    
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }

}

function skin() 
{
    var x = document.getElementById('skin');
    
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }

}

function nail() 
{
    var x = document.getElementById('nail');
    
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }

}


</SCRIPT>
</body>
</html>