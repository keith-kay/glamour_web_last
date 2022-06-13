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

//admin login validation

if (isset ($_POST['username']) && isset ($_POST['password']) )
{

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $name = test_input ($_POST['username']);
      $password = test_input ($_POST['password']);

      if (empty($name))
      {
          header("Location:adminlogin.php?error=Username is required");
      }
      else if (empty($password))
      {
        header("Location:adminlogin.php?error=Password is required");
      }
      else
      {

       
        $sql = " SELECT * FROM  glm_db_admins WHERE glm_db_admins_username='$name' and glm_db_admins_password='$password' ";
        $query = mysqli_query($db,$sql);

        if($row = mysqli_fetch_array($query))
        {

          $_SESSION['name'] = $name;
          $newname =  $_SESSION['name'];

          header("Location: admin.php");
        }
            else
            {
        		header("Location: adminlogin.php?error=Incorrect email and password combination");
        	}
      }

    }


?>
