<?php
include 'config.php';

if (isset ($_POST['signin']) ) 
{
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

      if (empty($name))
      {
          header("Location:userlogin.php?error=Name is required");
      }
      else if (empty($password))
      {
        header("Location:userlogin.php?error=Password is required");
      }
      else
      {
        $password = md5($password);

        $sql = " SELECT count(*) as cntUser FROM glm_db_employees WHERE glm_db_employees_name='$name' and glm_db_employees_password='$password' LIMIT 1 ";
        $query = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($query);
        $count = $row['cntUser'];
        if($count > 0){ 
          $_SESSION["name"] = $name;
          header("Location: user.php");
        } 
        else 
            {
        		header("Location: userlogin.php?error=Incorect Email and password combination");
        	}
        }
    }



?>