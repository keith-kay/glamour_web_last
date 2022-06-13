<?php

include 'admindb.php';
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$query="SET FOREIGN_KEY_CHECKS = 0";
	mysqli_query($db,$query);
    $sql = "DELETE FROM glm_db_employees WHERE glm_db_employees_id= $_GET[id] ";
    mysqli_query($db, $sql);
    
	if (mysqli_query($db, $sql)){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('User Deleted')
            window.location.href='users.php';
            </SCRIPT>");
	}else{
		echo "Error:" . $sql . "<br>" . $db->error;
	}
}



?>