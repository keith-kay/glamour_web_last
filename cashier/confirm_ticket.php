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
    <title>cashier-dashboard</title>
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
        <h1><a href="admin.php" style="color: #fff; text-decoration:none;">Glamour</a></h1>
           
        </div>
        <ul>
        <li><a href="confirm_ticket.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Tickets</a></li><br>
        <li><a href="paid_ticket.php" style="color: #fff; text-decoration:none;"><img src="userz.png" alt=""> Paid Tickets</a></li><br>
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
            
            <p>Employee [ <strong><?php echo $_SESSION["username"]; ?> </strong>]</p> 
            
                    <div class="imgcase">   
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                
               
            
      </div>
      
      <div class="content">
                <div id="search">
                        <div id="div_print" class="recent-payments">
                            <div class="heading">
                                <h2>Tickets </h2>
                                </div>

                                    <div class="search">
                                        <form action="ticketsearch.php" action="post">
                                            <label for=>Enter Ticket No:</label>
                                                <input type="number" name="tick" value="<?php echo '001'; ?>"  /><br>
                                                    <br><button type="submit" class="edit" name="search">Search</button>
                                                </form>
                                            </div>
                                            
                               
                                                 </div>  
                                                    </div> 
                                                                                                                              
                                             </div>
                                             

     </div>
   </div>
 </body>
</html>

