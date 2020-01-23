<?php
session_start();
$Name=$_REQUEST["name"];
$Des=$_REQUEST["froms"];
$tos=$_REQUEST["tos"];
$email=$_SESSION['username'];
$date=$_REQUEST["tdate"];
$noofchild=$_REQUEST["child"];
$noofadult=$_REQUEST["adult"];
if($Des==$tos)
{
    echo "Boarding and Destination cannot be same";
}
else{
if($noofadult!=0||$noofchild!=0){
include_once("connection.php");
$sqldata="insert into booking values( '".$email."','".$Name."','".$Des."','".$tos."','".$date."','".$noofadult."','".$noofchild."')";
$check=mysqli_query($con,$sqldata);
if($check!=0)
{
    echo "Sucessfully Booked";
header("location:uticket.php");}
else{
    echo "Conatct Admin";
    header("location:index.php");}}
else{
    echo "False Input";
}}
?>
