
<?php
session_start();
include('config.php');

function display_error() {
	global $errors;

	if(count($errors) > 0){
		echo '<div class="error">';
		    foreach ($errors as $error) {
				echo $error . '<br>';
			}
			echo '</div>';
	}
}

// function display_error() {

//     global $errors;

//     if (count($errors) > 0) {
//         echo '<div class ="error">';
//         foreach ($errors as $error) { 
//       echo $error . '<br>';
//         }
//         echo '</div>';
//      }
// }

//   variable declaration and setting them to global and null
global $username,$password;
 $errors = array(); 
 $username= "";
 $password= "";
// get the data from login form
if(isset($_POST['login'])){
$username=mysqli_real_escape_string($db, $_POST['username']);
$password=mysqli_real_escape_string($db, $_POST['password']);
// hash password
 $password = md5($password);

//  $password = password_hash($password, PASSWORD_DEFAULT);
// Validate form
if (empty($username)) { 
	array_push($errors, "Username is required"); 
}
if (empty($password)) { 
	array_push($errors, "Password is required"); 
}
 // check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
	array_push($errors,"Only letters and white space allowed");
}
// if( strlen($password) < 8) {
//     array_push($errors,"Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
// 	// }

// select from database where details match those from login form

if(count ($errors) == 0){
  $sql = " SELECT * FROM  glm_db_users WHERE glm_db_users_username='$username' OR glm_db_users_password='$password' ";
  $query = mysqli_query($db,$sql);

  if($row = mysqli_fetch_array($query))
  {
    
    $_SESSION['username'] = $row['glm_db_users_username'];
    $newname =  $_SESSION['username'];
    
    header("Location: home-1.php");
  } 
      else 
      {
      header("Location: signin.php?error=Incorect Email and password combination");
    }
  }
}

 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<style>
		.error{
			width: 80px;
			margin: 0px auto;
			padding: 10px;
			border: 1px solid #a94442;
			color: #a944442;
			background: #f2dede;
			border-radius: 5px;
			text-align: left;

		}
	
	</style>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="signintest.php">
	<?php echo display_error(); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php if (isset($username)){echo $username;} ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login">Login</button>
		</div>
		
	</form>
</body>
</html>
</html>