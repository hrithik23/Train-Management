<?php
session_start();
$user=$_SESSION['username'];
$name=$_REQUEST["txt1"];
$des=$_REQUEST["txt2"];
include_once("connection.php");
    $query1="delete from  booking WHERE Email ='$user' && Name='$name' && Destination='$des'";
$rs1=mysqli_query($con,$query1); 
if($rs1!=0){
header("location:cancel_booking.php");}
else{
    echo "Invalid Booking Not Found";
}
?>