<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="Assets/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/Rail_Reservation_CSS.css">
        <link rel="icon" href="Assets/IMG/minilogo.png" type="image/x-icon">
        <title>Rail Yatra</title>
    </head>
    <body style="background-color:#F7F9FB;">
    <div><br>
                    <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b>
                 </div><hr>
        <div class="container">
        <div>
        <div class="row">
       <div class="col-md-6" align="left"> <b><font size="4"  face="Baskerville Old Face">Welcome <?php session_start(); echo  $_SESSION['username'];?></font></b></div>
            <div class="col-md-6" align="right"><a href=UserHome.php><input type="button" class="btn btn-light" value="Back"></a></div></div></div>
         <div class="container">
                       <div class="row">
                           <div class="col-md-5"><b><font size="5" face="Baskerville Old Face"><a href=Changepassword.php><input type="button" class="btn btn-outline-primary" value="Update Password"></a></font></b></div>
                        
                        <div class="col-md-5"><font size="5" face="Baskerville Old Face"><a href="Changemob.php"><input type="button" class="btn btn-outline-primary" value="Update Mobile"></a></font></div>
                        
                       <div class="col-md-2"> <font size="5" face="Baskerville Old Face"><a href="Changeadd.php" ><input type="button" class="btn btn-outline-primary" value="Update Address" align="right"></a></font></div>
                  </div>  </div><div><br><br></div>
            <div class="container">
        <table align='center' border=".5">
         <?php
         include("connection.php");
        $eq=$_SESSION['username'];
        $sql="select * from user where email='$eq'";
        $rs=mysqli_query($con,$sql);
                 echo"<th align='center'>Name</th>
                  <th align='center'>Email</th>
                  <th align='center'>Date Of Birth</th>
                  <th align='center'>Gender</th>
                  <th align='center'>Mobile</th>
                 <th align='center'>Address</th> ";
        while($value=mysqli_fetch_assoc($rs))
        {
        echo"<tr align='center'><td >".$value["name"]."</td><td>".$value["email"]."</td><td>".$value["dob"]."</td><td>".$value["gender"]."</td><td>".$value["mobile"]."</td><td>".$value["addr"]."</td></tr>";
        }?>
         </table>
                  </div>
            
        <div></div>
            <div id="foot" align="center">
                  <br><br><br><b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </body>