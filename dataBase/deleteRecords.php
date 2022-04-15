<?php

$servername="localhost";
$username="root";
$password="";
$database="booking_appointment";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="DELETE FROM bookingform";
$result=mysqli_query($conn,$sql);
$conn->close();
?>