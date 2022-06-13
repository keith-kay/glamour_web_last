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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" type="image/png" href="../images/LogoSample_ByTailorBrands.jpg">
    <title>admin-dashboard</title>
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
  max-height: 300px;
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

    <div class="side-menu">
        <div class="title">
        <h1><a href="admin.php" style="color: #fff; text-decoration:none;">Glamour</a></h1>

        </div>
        <ul class="mainmenu">
        <li><a> &nbsp Users</a>
          <ul class="submenu">
          <li><a href="users.php">Clients</a></li>
          <li><a href="empusers.php">Employees</a></li>
          </ul>
        </li><br>
            <br><li><a href="appointments.php" style="color: #fff; text-decoration:none;"><img src="carz.png" alt=""> &nbsp Appointments</a></li><br>
            <br><li ><a href="">&nbsp Reports</a>
            <ul class="submenu">
            <li><a href="bookedreports.php">Appointments</a></li>
            <li><a href="skincare.php">Skin Care</a></li>
            <li><a href="haircare.php">Hair Care</a></li>
            <li><a href="nailcare.php">Nail Care</a></li>
            <li><a href="inquiries.php">Inquiries</a></li>
            <li><a href="paid_tickets.php">Paid Tickets</a></li>
            </ul>
            </li><br>
            <br><li><a href="adminlogin.php?logout='1'" style="color: #fff; text-decoration:none;"> <img src="logout.png" alt=""> &nbsp Logout</a></li><br>  
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
            </div>
        <div class="user">
         

            <a href="admin.php"><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg" style="margin-left: 180px;"></a>
                    <div class="imgcase">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                </div>


                <!-- BOOKINGS MADE IN GLAMOUR SALON SYSTEM-->
                <div class="content-2">

                   <div id="booking"class="recent-payments" >
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
                                  ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id ORDER BY glm_db_appointments_date ASC";
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

      </div>

     </div>
   </div>
 </body>
</html>
