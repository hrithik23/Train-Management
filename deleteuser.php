<?php
$user=$_REQUEST["txt1"];
include_once("connection.php");

$query2="delete from  user WHERE email='$user'";
  $rs1=mysqli_query($con,$query2);      
$query1="delete from login WHERE email='$user'";
  $rs2=mysqli_query($con,$query1);  
header("location:showuser.php");
?>