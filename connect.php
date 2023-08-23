<?php

	$servername="localhost";
    $username="id20821197_restauantwebsite";
    $password="12345@Acro123";
    $dbname="id20821197_restaurant";
	$con= mysqli_connect($servername,$username,$password,$dbname);
	if(!$con){
	
		die("Error deleting record:".mysqli_error($con));
	
	}
	
	if(isset($_POST['submit']))
	 {
		$fullName = $_POST['fullname'];
		$email = $_POST['email'];
		$persons = $_POST['no_of_persons'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$phone_number = $_POST['phone_number'];
	
		$sql=" INSERT INTO table_booking(fullname,email,no_of_persons,date,time,phone_number) 
			  VALUES ('$fullName', '$email', '$persons', '$date','$time','$phone_number')";
	   if(mysqli_query($con,$sql))
	   {
		  echo "<script>alert('Table Booking Confiremed')</script>";
	   }
	   else{
		  echo "error:".mysqli_error($con);
	   }
	   mysqli_close($con);
	}
	 
?>
