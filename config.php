<?php
	$conn = new mysqli("localhost","id20821197_restauantwebsite","12345@Acro123","id20821197_restaurant");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
