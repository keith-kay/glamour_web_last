<?php

include 'config.php';
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$query="SET FOREIGN_KEY_CHECKS = 0";
	mysqli_query($db,$query);
    $sql = "UPDATE glm_db_appointments SET glm_db_appointments_payment = 'Paid' WHERE glm_db_appointments_id= $_GET[id] ";
    mysqli_query($db, $sql);
    
	if (mysqli_query($db, $sql)){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Payment Confirmed')
            window.location.href='paid_ticket.php';
            </SCRIPT>");
	}else{
		echo "Error:" . $sql . "<br>" . $db->error;
	}
}



?>