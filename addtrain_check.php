<?php
$trainname=$_REQUEST["studentname"];
$trainno=$_REQUEST["studentemail"];
$rate=$_REQUEST["rate"];
$start=$_REQUEST["froms"];
$end=$_REQUEST["tos"];
$seat=$_REQUEST["seat"];
include("connection.php");
$sqldata="insert into train values( '".$trainno."','".$trainname."','".$rate."','".$start."','".$end."','".$seat."')";
$check=mysqli_query($con,$sqldata);
if($check!=0){
echo "Sucessfully Added";
header("location:adminHome.php");}
else{
    echo "Not Inserted";
header("location:adminHome.php");
}
?>