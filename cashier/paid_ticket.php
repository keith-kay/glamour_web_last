<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: cashierlogin.php');
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
    </style>

    <div class="side-menu">
        <div class="title">
        <h1><a href="home.php" style="color: #fff; text-decoration:none;">Glamour</a></h1>
           
        </div>
        <ul>
        <li><a href="confirm_ticket.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Tickets</a></li><br>
        <li><a href="confirm_ticket.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Paid Tickets</a></li><br>
            <br><li><a href="logout.php" style="color: #fff; text-decoration:none;"> <img src="logout.png" alt=""> &nbsp Logout</a></li><br>  
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">   
            </div>
        <div class="user">
         
          
            <a href="home.php"><img class="logo" src="../images/LogoSample_ByTailorBrands.jpg"></a>
            
            <p>User [ <strong><?php echo $_SESSION["username"]; ?> </strong>]</p> 
            
                    <div class="imgcase">   
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                
               
            
      </div>
      
      <div class="content-2">
                <div id="search">
                        <div id="div_print" class="recent-payments">
                            <div class="heading">
                                <h2>Tickets </h2>
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
 </body>
</html>

