<?php
include 'config.php';

if (isset ($_POST['signin']) ) 
{
  $name = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

      if (empty($name))
      {
          header("Location:cashierlogin.php?error=Name is required");
      }
      else if (empty($password))
      {
        header("Location:cashierlogin.php?error=Password is required");
      }
      else
      {
        $password = md5($password);

        $sql = " SELECT count(*) as cntUser FROM glm_db_cashiers WHERE glm_db_cashiers_username='$name' OR glm_db_cashiers_password='$password' LIMIT 1 ";
        $query = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($query);
        $count = $row['cntUser'];
        if($count > 0){ 
          $_SESSION["username"] = $name;
          header("Location:confirm_ticket.php");
        } 
        else 
            {
        		header("Location: cashierlogin.php?error=Incorrect email and password combination");
        	}
        }
    }



?>