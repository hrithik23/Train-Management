<html>
    <head>
           <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="Assets/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/Rail_Reservation_CSS.css">
        <link rel="icon" href="Assets/IMG/minilogo.png" type="image/x-icon">
        <title>Rail Reservation</title>
    </head>
    <body style="background-color:#F7F9FB;">
        <div class="container-fluid">
                 
            <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b></div>                  
         <div class="container">
                   <div class="row">
                        <div class="col-md-6"><b><table align="left"><tr ><td align="left"></td></tr></table><?php
                                                     session_start();?>
                            <a href="userdashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></b></div>
                   <div  class="col-md-6"> <table align="right"><tr ><td align="right"><b><a href="index.php">
                       <input type= "button"  class="btn btn-outline-danger" value="Logout"></a></b></td></tr></table></div>
                   </div></div>    
        <hr>  
        <div class="container">
                       <div class="row">
                           <div class="col-md-3"><b><font size="4" face="Baskerville Old Face"><a href=UserHome.php><input type="button" class="btn btn-light" value="Home"></a></font></b></div>
                           
                        
                        <div class="col-md-3"><font size="4" face="Baskerville Old Face"><a href="enquiry.php"><input type="button" class="btn btn-light" value="Enquire"></a></font></div>
                        
                       <div class="col-md-3"> <font size="4" face="Baskerville Old Face"><a href="UserHome.php"><input type="button" class="btn btn-light" value="Book Tickets"></a></font></div>
                       
                    <div class="col-md-3"><font size="4" face="Baskerville Old"><a href="cancel_booking.php"><input type="button" class="btn btn-light" value="Cancel"></a></font></div>
                  </div>  </div>
        <table align='center' border="2"><br>
         <?php
        $user=$_SESSION['username'];
        include("connection.php");
        $sql="select * from booking where Email='".$user."'";
                                                               
        $rs=mysqli_query($con,$sql);
                 echo"<th align='center'>Email</th>
                   <th align='center'>Name</th>
                  <th align='center'>Boarding</th>
                  <th align='center'>Destination</th>
                  <th align='center'>Date</th>
                  <th align='center'>Adults</th>
                  <th align='center'>Child</th>";
        while($value=mysqli_fetch_assoc($rs))
        {
        echo"<tr align='center'><td >".$value["Email"]."</td><td>".$value["Name"]."</td><td>".$value["Traveling"]."</td><td>".$value["Destination"]."</td><td>".$value["Date"]."</td><td>".$value["Adults"]."</td><td>".$value["Child"]."</td></tr>";
        }?>
         </table>
        
        
    
                <div id="foot" align="center">
                    <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>