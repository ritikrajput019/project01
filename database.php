<?php
$servername="localhost";
$username="root";
$password="";
$con= mysqli_connect($servername,$username,$password,$dbname);
if(!$con){

    die("Error deleting record:".mysqli_error($con));

}
?>
