<?php 
session_start();
$pass=$_REQUEST["txt1"];
$pass1=$_REQUEST["txt2"];
$repass=$_REQUEST["txt3"];
$user=$_SESSION['username'];
include_once("connection.php");
$query1 = "select * from adminlogin WHERE email='$user'";
$rs=mysqli_query($con,$query1);
$value=mysqli_fetch_assoc($rs);
if($value["passwor"]==$pass)
{
    if($value["passwor"]!=$pass1)
    {
    if($pass1==$repass)
    {
    $query1="UPDATE adminlogin SET passwor='$pass1' WHERE email='$user'";
        $rs=mysqli_query($con,$query1);
        if($rs!=0){
        header("location:adminHome.php");
    }
        }
else{
    echo "Password Dont match";
header("location:admindashboard.php");
}
    }
    else{
        echo "Same Password Try Something Else";
        header("location:admindashboard.php");
        
    }
}
else{
    echo"Password Dont Match";
    header("location:adminLogin.php");
}

?>