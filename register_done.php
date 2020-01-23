<?php
$name=$_REQUEST["studentname"];
$email=$_REQUEST["studentemail"];
$pass=$_REQUEST["pass"];
$repass=$_REQUEST["repass"];
$date=$_REQUEST["date"];
$gender=$_REQUEST["gender"];
$mob=$_REQUEST['mob'];
$addre=$_REQUEST["add"];
include("connection.php");
$sqldata="insert into user values( '".$name."','".$email."','".$date."','".$gender."','".$mob."','".$addre."')";
$sql1data="insert into login values( '".$email."','".$name."','".$pass."')";
$check=mysqli_query($con,$sqldata);
$check1=mysqli_query($con,$sql1data);
echo "<script type='text/javascript'>alert 'Sucessfully Added and You may login'</script>";
header("location:index.php");
