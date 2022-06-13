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
    <link rel="shortcut icon" type="image/png" href="../images/LogoSample_ByTailorBrands.jpg">
    <title>employee-dashboard</title>
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
    float:right;
    text-align:right;
    margin-left:10px;
    }
    </style>

 <div class="side-menu">
        <div class="title">
        <h1><a href="user.php" style="color: #fff; text-decoration:none;">Glamour</a></h1>
           
        </div>
        <ul>
		 <li><a href="appointments.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Total Appointments</a></li><br>
        <li><a href="appointment.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Your Appointments</a></li><br>
            <br><li><a href="logout.php" style="color: #fff; text-decoration:none;"> <img src="logout.png" alt=""> &nbsp Logout</a></li><br>  
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">   
            </div>
        <div class="user">
          
            
            <a href="user.php" style="color: #fff;" ><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg" alt=""> &nbsp Employee Dashboard</a>
                    
            <div class="imgcase">   
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
            
      </div>
      <div class="content-2">
              <div class="recent-payments">
                 <div class="heading">
                    <h2>Glamour Salon Appointments Booked</h2>
                      </div>
                    <table>
                    <tr>
                    <th>Booked By</th> 
                    <th>Service Category</th>
                    <th>Date</th> 
                    <th>Time</th>
                    <th>Service Name</th>
                    <th>Service Provider</th>

                    </tr>
                    
                    <?php                          
                   // Check dbection
                   include 'admindb.php';
                   //get user's foreign key
                   
                   $sql = "SELECT glm_db_users.glm_db_users_name,
                                  glm_db_appointments.glm_db_appointments_date,
                                  glm_db_appointments.glm_db_appointments_time,
                                  glm_db_appointments.glm_db_appointments_servicename,
                                  glm_db_appointments.glm_db_appointments_serviceprovider,
                                  glm_db_services.glm_db_services_name
                                  FROM glm_db_appointments
                                  JOIN glm_db_users
                                  ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                  JOIN glm_db_services
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id ORDER BY glm_db_appointments_date ASC";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc() ) 
                   {
                   echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td><td>" . $row["glm_db_appointments_serviceprovider"]. "</td></tr><br>"; }
                   echo "</table>";
                   } else { echo "0 results"; 
                }
                   
                                                
                    ?> 
                    </table>               
            </div>
        </div>
      </div>
     </div>
   </div>
 </body>
</html>