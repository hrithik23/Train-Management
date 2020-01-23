<?php
$error= "username/password incorrect";
include("connection.php");
$username=$_REQUEST["username"];
$pass=$_REQUEST["pass"];
    $query1 = "select* from adminlogin WHERE email='$username'";
$rs=mysqli_query($con,$query1);
$value=mysqli_fetch_assoc($rs);
if($value["passwor"]==$pass)
		{
    session_start();
    $_SESSION["username"] = $username;
header("location:adminHome.php");
		}
       else{
           $_SESSION["error"] = $error;
    echo"Invalid";
           session_destroy();
            header("location: adminLogin.php");}
          ?>