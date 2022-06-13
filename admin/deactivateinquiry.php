<?php

include 'admindb.php';
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$query="SET FOREIGN_KEY_CHECKS = 0";
	mysqli_query($db,$query);
    $sql = "DELETE FROM glm_db_contacts WHERE glm_db_contacts_id= $_GET[id] ";
    mysqli_query($db, $sql);
    
	if (mysqli_query($db, $sql)){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Inquiry Deleted')
            window.location.href='inquiries.php';
            </SCRIPT>");
	}else{
		echo "Error:" . $sql . "<br>" . $db->error;
	}
}
?>