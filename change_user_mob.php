<?php 
session_start();
$pass=$_REQUEST["txt1"];
$user=$_SESSION['username'];
include_once("connection.php"); 
$query1="UPDATE user SET mobile='$pass' WHERE email='$user'";
        $rs=mysqli_query($con,$query1);
        if($rs!=0){
        header("location:userdashboard.php");
    }
else{
    echo"Error Try Again Later";
}
?>