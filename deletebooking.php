<?php
$user=$_REQUEST["txt1"];
include_once("connection.php");
$query2="delete from booking WHERE Email='$user'";
  $rs1=mysqli_query($con,$query2);      
        header("location:showbooking.php");
echo "Invalid Booking Not Found";
    header("location:showbooking.php");
?>