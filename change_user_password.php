<?php 
session_start();
$pass=$_REQUEST["txt1"];
$pass1=$_REQUEST["txt2"];
$repass=$_REQUEST["txt3"];
$user=$_SESSION['username'];
include_once("connection.php");
$query1 = "select * from login WHERE email='$user'";
$rs=mysqli_query($con,$query1);
$value=mysqli_fetch_assoc($rs);
if($value["password"]==$pass)
{
    if($value["password"]!=$pass1)
    {
    if($pass1==$repass)
    {
    $query1="UPDATE login SET password='$pass1' WHERE email='$user'";
        $rs=mysqli_query($con,$query1);
        if($rs!=0){
        header("location:userdashboard.php");
    }
        }
else{
    echo "Password Dont match";
header("location:Changepassword.php");
}
    }
    else{
        echo "Same Password Try Something Else";
        header("location:Changepassword.php");
        
    }
}
else{
    echo"Password Dont Match";
    header("location:Changepassword.php");
}

?>