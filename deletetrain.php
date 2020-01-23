<?php
$user=$_REQUEST["txt1"];
include_once("connection.php");
$query2="delete from train WHERE trainno='$user'";
  $rs1=mysqli_query($con,$query2);      
if($rs!=0)        
{header("location:showtrain.php");}
else{
echo "Invalid Train Not Found";
    header("location:showtrain.php");
}?>