<?php
$user=$_REQUEST["txt1"];
$des=$_REQUEST["txt2"];
include_once("connection.php");
    $query1="delete from  booking WHERE Name ='$user'&&Destination='$des'";
$rs1=mysqli_query($con,$query1); 
if($rs1!=0){
header("location:user_cancel");}
else{
    echo "Invalid Booking Not Found";
}
?>