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
                                <h2>Total Bookings Made <?php echo $_GET['month']?></h2>
                                <a href="nailcare.php" class="del">Back</a></button>
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
                                                        </tr>
                                                        <?php
                                                        // Check dbection
                                                        include 'admindb.php';
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
                                                        ON glm_db_appointments_servicecategory = glm_db_services.glm_db_services_id
                                                        WHERE glm_db_services_name = 'Nail and Foot Care' AND monthname(glm_db_appointments_date)='".$_GET['month']."' ORDER BY glm_db_appointments_date ASC";
                                                        $result = $db->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {     
                                                        echo "<tr><td>" . $row["glm_db_users_name"] . "</td><td>" . $row["glm_db_services_name"]. "</td><td>" . $row["glm_db_appointments_date"]. "</td><td>" . $row["glm_db_appointments_time"]. "</td><td>" . $row["glm_db_appointments_servicename"]. "</td><td>" . $row["glm_db_appointments_serviceprovider"]. "</td></tr><br>";  }
                                                        echo "<td><button onclick=printdiv('div_print') class=edit>Print</button></td>";
                                                        echo "</table>";   
                                                        } else { echo "0 results"; }
                                                        ?>
                                                    </table>
                                                 </div>  
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
</body>
</html>
