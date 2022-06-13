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
          

            <a href="admin.php"><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg" style="margin-left:180px;"></a>
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
                                <h2>Total Paid Tickets</h2>
                            </div>
                            <table>
                                                        <tr>
                                                        <th>Ticket_No</th>
                                                        <th>Customer</th>
                                                        <th>Service</th>
                                                        <th>Service Category</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Service Provider</th>
                                                        <th>Status</th>
                                                        <th>Price</th>
                                                        </tr>
                                                        <?php
                                                        // Check dbection
                                                        $servername = "127.0.0.1";
                                                        $uname = "root";
                                                        $password = "";
                                                        $db_name = "glm_db";

                                                        $db = mysqli_connect($servername, $uname, $password, $db_name);
                                                        if (!$db)
                                                        {
                                                            echo "Connection Failed!";
                                                            exit();
                                                        }
                                                        $sql = "SELECT glm_db_users.glm_db_users_name,
                                                        glm_db_appointments.glm_db_appointments_date,
                                                        glm_db_appointments.glm_db_appointments_time,
                                                        glm_db_appointments.glm_db_appointments_id,
                                                        glm_db_appointments.glm_db_appointments_servicename,
                                                        glm_db_appointments.glm_db_appointments_serviceprovider,
                                                        glm_db_appointments.glm_db_appointments_payment,
                                                        glm_db_services.glm_db_services_name,
                                                        glm_db_services.glm_db_services_price
                                                        FROM glm_db_appointments
                                                        JOIN glm_db_users
                                                        ON glm_db_appointments_user = glm_db_users.glm_db_users_id
                                                        JOIN glm_db_services
                                                        ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id
                                                        WHERE glm_db_appointments_payment = 'Paid'";
                                                        $result = $db->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<tr><td>" . $row["glm_db_appointments_id"] . "</td><td>" . $row["glm_db_users_name"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_serviceprovider"]. "</td><td>" . $row["glm_db_appointments_payment"]. "</td><td>" . $row["glm_db_services_price"]. "</td></tr><br>";  }
                                                        echo "</table>";
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
