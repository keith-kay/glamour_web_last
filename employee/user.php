<?php

include "config.php";

// Check user login or not
if(!isset($_SESSION['name'])){
    header('Location: userlogin.php');
}

?>
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


            <a href="admin.php"><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg"></a>

            <p>Employee [ <strong><?php echo $_SESSION['name']; ?> </strong>]</p>

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
                            $servername = "localhost";
                            $uname = "ninah";
                            $password = "sharonallanjaironinah";
                            $db_name = "glm_db";

                            $db = mysqli_connect($servername, $uname, $password, $db_name);
                            if (!$db)
                            {
                                echo "Connection Failed!";
                                exit();
                            }
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
                    $servername = "localhost";
                    $uname = "ninah";
                    $password = "sharonallanjaironinah";
                    $db_name = "glm_db";

                            $db = mysqli_connect($servername, $uname, $password, $db_name);
                            if (!$db)
                            {
                                echo "Connection Failed!";
                                exit();
                            }
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
                      $servername = "localhost";
                      $uname = "ninah";
                      $password = "sharonallanjaironinah";
                      $db_name = "glm_db";

                            $db = mysqli_connect($servername, $uname, $password, $db_name);
                            if (!$db)
                            {
                                echo "Connection Failed!";
                                exit();
                            }
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
