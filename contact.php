<?php

	$servername="localhost";
    $servername="localhost";
    $username="id20821197_restauantwebsite";
    $password="12345@Acro123";
	$con= mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$con){
	
		die("Error deleting record:".mysqli_error($con));
	
	}
	
	if(isset($_POST['submit']))
	 {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
        $message = $_POST['usermessage'];
		$sql=" INSERT INTO contact(firstname,lastname,email,mobile,usermessage) 
			  VALUES ('$firstname','$lastname', '$email', '$mobile', '$message')";
	   if(mysqli_query($con,$sql))
	   {
		  echo "<script>alert('Message Sent Successfully')</script>";
	   }
	   else{
		  echo "error:".mysqli_error($con);
	   }
	   mysqli_close($con);
	}
	 
?>
