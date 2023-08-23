<?php
$servername="localhost";
$username="id20821197_restauantwebsite";
$password="12345@Acro123";
$con= mysqli_connect($servername,$username,$password,$dbname);
if(!$con){

    die("Error deleting record:".mysqli_error($con));

}
?>
