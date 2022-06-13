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
            <br><li ><a>&nbsp Reports</a>
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
          <a href="adduser.php" class="btn">Add Employee</a> &nbsp; &nbsp;&nbsp;
          <a href="addcashier.php" class="btn">Add Cashier</a> &nbsp; &nbsp;
          <a href="addclient.php" class="btn">Add Client</a> &nbsp; &nbsp;&nbsp;

            <a href="admin.php"><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg"></a>
                    <div class="imgcase">
                    </div>
                </div>
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
     </div>
   </div>
 </body>
</html>
