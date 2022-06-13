<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/LogoSample_ByTailorBrands.jpg">
    <title>Sign In</title>
</head>
<body>  
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f3eded;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  margin-top: 20px;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
}
.alert {
  padding: 20px;
  background-color: #ff3333;
  color: white;
  border-radius:5px;
}
.exclamation {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.logo
{

    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    position: absolute;
    right: 45%; 
}
.img
    {
      position:absolute;
      left: 20px;;
      top: 15px;
      color: #fff;
      letter-spacing: 1px;
      border: none;
      background: rgb(212, 15, 15);
      cursor: pointer;
      padding:10px;
      border-radius: 4px;
      text-decoration: none;
      box-shadow: 0 8px 16px 0 rgba(104, 27, 27, 0.2);
    }
    .img:hover
    {
      background: rgb(255, 95, 127);
    }
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
  margin-top: 35px;
  text-align: center;
  font-family: cursive;
}

.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: teal;
  cursor: pointer;
}
.input-box.button input:hover{
  background: crimson;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

@media screen and (max-width: 600px) {
      .img
      {
          margin-bottom: 20px;
      }
      .wrapper{
  position: relative;
  max-width: 380px;
  width: 100%;
  margin-top: 50px;
  padding: 34px;
}
      
    }
  </style>
  
  <a class="img" href="index.php"> Home</a>
    <div class="wrapper">
      
        <img class="logo" src="images/LogoSample_ByTailorBrands.jpg">
      
      <br><br>
        <h2>Reset Password</h2>
		<form action="validatelogin.php" method="post"> 
    <label class="grey" for="password1">Current Password:</label>
    <input class="field" type="password" name="password1" id="password1" value="" size="23" />
    <label class="grey" for="password">New Password:</label>
    <input class="field" type="password" name="passwordnew1" id="passwordnew1" size="23" />
    <input type="submit" name="submit" value="Change" class="bt_register" style="margin-left: 382px;" />
      <div class="clear"></div>
    <?php
    if($_SESSION['msg']['passwordchange-err'])
    {
        echo '<div class="err">'.$_SESSION['msg']['passwordchange-err'].'</div>';
        unset($_SESSION['msg']['passwordchange-err']);
    }
    if($_SESSION['msg']['passwordchange-success'])
    {
        echo '<div class="success">'.$_SESSION['msg']['passwordchange-success'].'</div>';
        unset($_SESSION['msg']['passwordchange-success']);
    }
    ?>
</form>

      </div>
</body>
</html>




<?php
session_start();

$password = @$_POST['password'];
$username = @$_POST['username'];
$submit = @$_POST['submit'];

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

?>