<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/LogoSample_ByTailorBrands.jpg">
    <title>Add Employee</title>
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
      left: 20px;
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

form .policy{
  display: flex;
  align-items: center;
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

  <a class="img" href="admin.php"> Back</a>
    <div class="wrapper">

        <img class="logo" src="../images/LogoSample_ByTailorBrands.jpg">

      <br><br>
        <h2>Add Employee</h2>
        <form action="empcashval.php" method="post">
          <!--call the array push errors-->
        <?php if (isset ($_GET['error']))
                {?>
              <div class="alert ">
                <span class="exclamation" >&#33;</span>
                <strong><?=$_GET['error']?></strong>
              </div>
                <?php } ?>
          <div class="input-box">
            <input type="text" placeholder="Enter name" name="name" >
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter email" name="email">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter job description" name="job">
          </div>
          <div class="input-box">
            <input type="password" placeholder="Create password" name="password">
          </div>
          <div class="input-box">
            <input type="password" placeholder="Confirm password" name="password2" >
          </div>
          <div class="input-box button">
            <input type="Submit" name="submit" value="Register Now">
          </div>

        </form>
      </div>
</body>
</html>
