<?php
// creating a fuction called display error thah uses global variable to loop through for errors(empty fields in data forms)
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
?>