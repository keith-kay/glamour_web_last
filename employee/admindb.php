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

    /* Adding employee and creating account */

if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email= mysqli_real_escape_string($db, $_POST['email']);
  $job= mysqli_real_escape_string($db, $_POST['job']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmpassword = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  //validate name, password and email for required format
  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
  {
    header("Location:adduser.php?error=Only letters and white space allowed on names");
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
    header("Location:adduser.php?error=Email Format Invalid");
  }
  else if (!preg_match("/^[a-zA-Z-' ]*$/",$job)) 
  {
    header("Location:adduser.php?error=Only letters and white space allowed on jobs");
  }
  else if (strlen($_POST["password"]) < 8) 
  {
    header("Location:adduser.php?error=Your Password Must Contain At Least 8 Characters!"); 
  }
  elseif(!preg_match("#[0-9]+#",$password)) 
  {
    header("Location:adduser.php?error=Your Password Must Contain At Least 1 Number!");  
  }
  elseif(!preg_match("#[A-Z]+#",$password))
  {
    header("Location:adduser.php?error=Your Password Must Contain At Least 1 Capital Letter!");   
  }
  elseif(!preg_match("#[a-z]+#",$password)) 
  {
    header("Location:adduser.php?error=Your Password Must Contain At Least 1 Lowercase Letter!");  
  }

  if (empty($name))
{
    header("Location:adduser.php?error=Name is required");
}
else if (empty($email))
{
  header("Location:adduser.php?error=email is required");
}
else if (empty($job))
{
  header("Location:adduser.php?error=job is required");
}

else if (empty($password))
{
  header("Location:adduser.php?error=Password is required");
}
else if ($password != $confirmpassword)
{
  header("Location:adduser.php?error=Passwords do not Match");
}
 else
 {
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM glm_db_employees WHERE glm_db_employees_email='$email' OR glm_db_employees_password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['glm_db_employees_email'] === $email) {
      echo"error=Email already exists!";
    }
  }
  else
  {
    $password = md5($password);
    $insert_query = "INSERT INTO glm_db_employees (glm_db_employees_name, glm_db_employees_email, glm_db_employees_job_description,	glm_db_employees_password) 
          VALUES( '$name','$email', '$job','$password')"; 
    mysqli_query($db, $insert_query);
    if($insert_query)
    {
    $_SESSION['glm_db_employees_name'] = $name;
    echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Added Successfully')
          window.location.href='empusers.php';;
          </SCRIPT>");
    
  }
}

  }

}




?>