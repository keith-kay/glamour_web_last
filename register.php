<?php
session_start();
include 'config.php';

/* User signing and creating account */

if (isset($_POST['submit'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $username= mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($db, $_POST['password2']);
  
    // form validation: ensure that the form is correctly filled ...
   
   

    if ($submit) {
      if (!isset($_POST['$username'])) {
      echo 'Please enter your username';
      }
      
      if (!isset ($_POST['$password'])) {
      echo 'Please enter your password';
      
      }else if ($username && $password) {
      $connect = mysql_connect("localhost", "ninah", "sharonallanjaironinah") or die ("couldnt connect");
      mysql_select_db("glm_db") or die ("couldnt find the db");
      
      $query = mysql_query("SELECT * FROM glm_db_users WHERE glm_db_users_username = '$username'");
      
      $numrows = mysql_num_rows($query);
      
      if ($numrows == 0) {
        echo 'that username doesnt exist';
      }
      
      
      }
      }    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
    {
      header("Location:signup.php?error=Only letters and white space allowed on names");
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) 
    {
      header("Location:signup.php?error=Only letters and white space allowed on username");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      header("Location:signup.php?error=Email Format Invalid");
    }
    else if (strlen($_POST["password"]) < 8) 
    {
      header("Location:signup.php?error=Your Password Must Contain At Least 8 Characters!"); 
    }
    elseif(!preg_match("#[0-9]+#",$password)) 
    {
      header("Location:signup.php?error=Your Password Must Contain At Least 1 Number!");  
    }
    elseif(!preg_match("#[A-Z]+#",$password))
    {
      header("Location:signup.php?error=Your Password Must Contain At Least 1 Capital Letter!");   
    }
    elseif(!preg_match("#[a-z]+#",$password)) 
    {
      header("Location:signup.php?error=Your Password Must Contain At Least 1 Lowercase Letter!");  
    }
   
  
     //validate name, password and email for required format
    if (empty($name))
  {
      header("Location:signup.php?error=Name is required");
  }
  else if (empty($email))
  {
    header("Location:signup.php?error=email is required");
  }
  else if (empty($username))
  {
    header("Location:signup.php?error=username is required");
  }
  else if (empty($password))
  {
    header("Location:signup.php?error=Password is required");
  }
  else if ($password != $confirmpassword)
  {
    header("Location:signup.php?error=Passwords do not Match");
  }
   else
   {
    /* first check the database to make sure 
     a user does not already exist with the same username and/or email */
    $user_check_query = "SELECT * FROM glm_db_users WHERE glm_db_users_email='$email' OR glm_db_users_password='$password' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['glm_db_users_email'] === $email) {
        echo"error=Email already exists!";
      }
    }
    else
    {  
      //password encyption
      $password = md5($password);
      $insert_query = "INSERT INTO glm_db_users (glm_db_users_name, glm_db_users_email, glm_db_users_password,glm_db_users_username) 
            VALUES('$name', '$email','$password','$username')"; 
      mysqli_query($db, $insert_query);
      if($insert_query)
      {
      $_SESSION['glm_db_users_name'] = $name;
      echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Added Successfully')
            window.location.href='signin.php';
            </SCRIPT>");
      
    }
  }

    }
  
}




                          
  

?>