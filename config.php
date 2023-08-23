<?php
	$conn = new mysqli("localhost","root","","restaurant");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
