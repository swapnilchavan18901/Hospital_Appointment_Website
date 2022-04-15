<?php

$servername="localhost";
$username="root";
$password="";
$database="booking_appointment";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `bookingform` (`Name`, `EmailAddress`, `ContactNo.`, `Message`,`Date`) VALUES ( '$usernam', '$email', '$contact', '$message',current_timestamp())";
$result=mysqli_query($conn,$sql);
$conn->close();
?>