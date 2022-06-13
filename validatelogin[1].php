<?php
session_start();
include 'config.php';
/* Validate User Login */
if (isset ($_POST['username']) && isset ($_POST['password']) ) 
{

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      // get the data from login form
      $username = test_input ($_POST['username']);
      $password = test_input ($_POST['password']);

      //validate login form
      if (empty($username))
      {
          header("Location:signin.php?error=Username is required");
      }
      else if (empty($password))
      {
        header("Location:signin.php?error=Password is required");
      }
      else
      {
       //  $password = password_hash($password, PASSWORD_DEFAULT);
        $password = md5($password);

        // select from database where details match those from login form
        $sql = " SELECT * FROM  glm_db_users WHERE glm_db_users_username='$username' and glm_db_users_password='$password' ";
        $query = mysqli_query($db,$sql);
  
        if($row = mysqli_fetch_array($query))
        {
          
          $_SESSION['name'] = $row['glm_db_users_name'];
          $newname =  $_SESSION['name'];
          
          header("Location: home-1.php");
        } 
            else 
            {
        		header("Location: signin.php?error=Incorect Email and password combination");
        	}
      }
      
    }


    //booking appointments section
    if (isset($_POST['book'])) 
    {
      $time = mysqli_real_escape_string($db, $_POST['time']);
      $date=  date('Y-m-d', strtotime($_POST['date']));
      $service = mysqli_real_escape_string($db, $_POST['servicename']);
      $category = mysqli_real_escape_string($db, $_POST['category']);
      $serviceprovider = mysqli_real_escape_string($db, $_POST['serviceprovider']);
     //check for empty datavalues
     if (empty($time))
     {
         header("Location:home-1.php?error=Time is required");
     }
     else if (empty($date))
     {
       header("Location:home-1.php?error=Date is required");
     }
     else if (empty($service))
     {
       header("Location:home-1.php?error=Service is required");
     }
     else
     { 
       // select from database where details match those from login form
       $checkquery = " SELECT count(*) as cntUser FROM glm_db_appointments WHERE  glm_db_appointments_serviceprovider = '$serviceprovider' AND glm_db_appointments_time = '$time' AND glm_db_appointments_date = '$date' LIMIT 1"; 
       $query = mysqli_query($db,$checkquery);
        $row = mysqli_fetch_array($query);
        $count = $row['cntUser'];
        if($count > 0)
        {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Service provider not available at this time. Kindly choose another time!')
            window.location.href='home-1.php#pop-up1';
            </SCRIPT>");
        }
        else
        {
          $insertquery = "INSERT INTO glm_db_appointments (glm_db_appointments_servicecategory,glm_db_appointments_user,glm_db_appointments_date,glm_db_appointments_time,glm_db_appointments_servicename,glm_db_appointments_serviceprovider)  
          VALUES ((SELECT glm_db_services_id FROM  glm_db_services WHERE glm_db_services_name = '$category'),(SELECT glm_db_users_id FROM glm_db_users WHERE glm_db_users_name = '$_SESSION[name]'),'$date','$time','$service','$serviceprovider')";
          if(mysqli_query($db, $insertquery))
          {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Booking Successful. Please Print Your Ticket!')
              window.location.href='home-1.php';
              </SCRIPT>");
          }
        }
     }
   

    }



?>