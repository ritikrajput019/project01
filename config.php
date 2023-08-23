<?php
	$conn = new mysqli("localhost","restauantwebsite","","restaurant");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
