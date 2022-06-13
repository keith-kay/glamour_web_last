<?php
session_start();
include('config.php');
include ('functions.php');
//   variable declaration and setting them to global and null
function register(){
global $db, $errors, $username, $email, $job;
$name = e($_POST['name']);
$email = e($_POST['email']);
$job = e($_POST['job']);
$password1 = e($_POST['password1']);
$password2 = e($_POST['password2']);
// hash password/password encryption
 $password = md5($password);

// Validate form
if (empty($name)) { 
	array_push($errors, "name is required"); 
}
if (empty($password)) { 
	array_push($errors, "Password is required"); 
}
if (empty($job)) { 
	array_push($errors, "Job is required"); 
}
if (empty($email)) { 
	array_push($errors, "email is required"); 
}
 // check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	array_push($errors,"Only letters and white space allowed on name");
  }
	// if( strlen($password) < 8) {
    // array_push($errors,"Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
	// }
// select from database where details match those from login form

  if(count ($errors)== 0){
  $sql = " SELECT * FROM  glm_db_employees WHERE glm_db_employees_email'$email' and glm_db_employees_password='$password' LIMIT 1";
  $query = mysqli_query($db,$sql);
  if($row = mysqli_fetch_array($query))
  {
    
    $_SESSION['name'] = $row['glm_db_employees_name'];
    $newname =  $_SESSION['name'];
    
    header("Location: admin.php");
  } 
      else 
      {
      header("Location: adduser.php?error=Incorect Email and password combination");
    }
  }
}

 


?>