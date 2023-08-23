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
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
  $feedback=$_POST['feedback'];

    $sql=" INSERT INTO feedback(name,email,phonenumber,feedback) 
          VALUES ('$name', '$email', '$phonenumber', '$feedback')";
   if(mysqli_query($con,$sql))
   {
      echo "<script>alert('Feedback Submitted')</script>";
   }
   else{
      echo "error:".mysqli_error($con);
   }
   mysqli_close($con);
}
 

?>
