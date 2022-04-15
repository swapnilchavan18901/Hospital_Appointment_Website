<?php

$servername="localhost";
$username="root";
$password="";
$database="booking_appointment";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `bookingform` (`Name`, `EmailAddress`, `ContactNo.`, `Message`) VALUES ( '$usernam', '$email', '$contact', '$message')";
$result=mysqli_query($conn,$sql);
?>