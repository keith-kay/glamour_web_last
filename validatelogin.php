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

      $username = test_input ($_POST['username']);
      $password = test_input ($_POST['password']);
      
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
        $password = md5($password);//encrypt database glm_db_users_password

        $sql = " SELECT * FROM  glm_db_users WHERE glm_db_users_username='$username' and glm_db_users_password='$password' ";
        $query = mysqli_query($db,$sql);
  
        if($row = mysqli_fetch_array($query))
        {
          
          $_SESSION['name'] = $row['glm_db_users_name'];
          $newname =  $_SESSION['name'];
          
          header("Location: homeL.php");
        } 
            else 
            {
        		header("Location: signin.php?error=Incorrect email and password combination");
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
     //check for empty data values
     if (empty($time))
     {
         header("Location:homeL.php?error=Time is required");
     }
     else if (empty($date))
     {
       header("Location:homeL.php?error=Date is required");
     }
     else if (empty($service))
     {
       header("Location:homeL.php?error=Service is required");
     }
       echo $category;     
$insertquery = "INSERT INTO glm_db_appointments (glm_db_appointments_servicecategory,glm_db_appointments_user,glm_db_appointments_date,glm_db_appointments_time,glm_db_appointments_servicename,glm_db_appointments_serviceprovider)  
VALUES ((SELECT glm_db_services_id FROM  glm_db_services WHERE glm_db_services_name = '$category'),(SELECT glm_db_users_id FROM glm_db_users WHERE glm_db_users_name = '$_SESSION[name]'),'$date','$time','$service','$serviceprovider')";
if(mysqli_query($db, $insertquery))
{
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Booking Successful Please Print Your Ticket!')
    window.location.href='homeL.php';
    </SCRIPT>");
}
    }


if($_POST['submit']=='Change')
{
    $err = array();
    if(!$_POST['password1'] || !$_POST['passwordnew1'])
        $err[] = 'All the fields must be filled in!';
    if(!count($err))
    {
        $_POST['password1'] = mysql_real_escape_string($_POST['password1']);
        $_POST['passwordnew1'] = mysql_real_escape_string($_POST['passwordnew1']);
        $row = mysql_fetch_assoc(mysql_query("SELECT glm_db_users_id, glm_db_users_username FROM glm_db_users WHERE  glm_db_users_username='{$_SESSION['username']}' AND glm_db_password='".md5($_POST['password1'])."'"));
        if($row['username'])
    {
        $querynewpass = "UPDATE glm_db_users SET glm_db_users_password='".md5($_POST['passwordnew1'])."' WHERE glm_db_users_username='{$_SESSION['username']}'";
        $result = mysql_query($querynewpass) or die(mysql_error());
        $_SESSION['msg']['passwordchange-success']='* You have successfully changed your password!';
    }
        else $err[]='Wrong password to start with!';
    }
    if($err)
    $_SESSION['msg']['passwordchange-err'] = implode('<br />',$err);
    header("Location: homeL.php?id=" . $_SESSION['username']);
    exit;
}
?>