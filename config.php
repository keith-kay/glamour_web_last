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


if (isset ($_POST['firstname']) && isset ($_POST['email']) && isset ($_POST['subject']) ) 
{
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $name = test_input ($_POST['firstname']);
	    $email = test_input ($_POST['email']);
      $subject = test_input ($_POST['subject']);

      if (empty($name))
      {
          header("Location:contactus.php?error=Name is required");
      }
	  else if (empty($email))
      {
        header("Location:contactus.php?error=Email is required");
      }
      else if (empty($subject))
      {
        header("Location:contactus.php?error=Subject is required");
      }
      else
      {
        $insertquery = "INSERT INTO glm_db_contacts (glm_db_contacts_customername,glm_db_contacts_customer_email,glm_db_contacts_message)  
        VALUES ('$name','$email','$subject')";
        if(mysqli_query($db, $insertquery))
        {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Message sent successfully!')
        window.location.href='contactus.php';
        </SCRIPT>");
        }
    }


}
?>