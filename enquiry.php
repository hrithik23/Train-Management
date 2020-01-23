<html>
    <head>
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="Assets/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/Rail_Reservation_CSS.css">
         <link rel="icon" href="Assets/IMG/minilogo.png" type="image/x-icon">
        <title>Rail Reservation</title>
    </head>
    <body style="background-color:#F7F9FB;" >
        
        <div >
            <div >
               <div><br>
                    <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b>
                 </div>
 <div class="container">
                   <div class="row">
                        <div class="col-md-6"><b><table align="left"><tr ><td align="left"></td></tr></table><?php
                                                     session_start();?>
                            <a href="userdashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></b></div>
                   <div  class="col-md-6"> <table align="right"><tr ><td align="right"><b><a href="index.php">
                       <input type= "button"  class="btn btn-outline-danger" value="Logout"></a></b></td></tr></table></div>
                   </div></div><hr>                
                <div>
                    <div class="container">
                       <div class="row">
                           <div class="col-md-3"><b><font size="4" face="Baskerville Old Face"><a href=UserHome.php><input type="button" class="btn btn-light" value="Home"></a></font></b></div>
                        
                        <div class="col-md-3"><font size="4" face="Baskerville Old Face"><a href="UserHome.php"><input type="button" class="btn btn-light" value="Book Ticket"></a></font></div>
                        
                       <div class="col-md-3"> <font size="4" face="Baskerville Old Face"><a href="uticket.php"><input type="button" class="btn btn-light" value="Your tickets"></a></font></div>
                       
                    <div class="col-md-3"><font size="4" face="Baskerville Old"><a href="cancel_booking.php"><input type="button" class="btn btn-light" value="Cancel"></a></font></div>
                  </div>  </div>
                    
                  
                    <div class="container"><br><br><br>
                    <div class="row">
                        <div class="col-md-6">
                        <div align="center"><b><font size="5"  face="Baskerville Old Face">Photo Galley</font></b></div>
                        <br><br>    
                        <div><marquee behavior="alternate" >
                            <img src="Assets/IMG/incredible_india.jpg" height="150" width="200">
                            <img src="Assets/IMG/1433317533GatimaanExpress.jpg" height="150" width="200">
                            <img src="Assets/IMG/train-ride-1000x600.jpg" height="150" width="200">
                            <img src="Assets/IMG/img60454972968.jpg" height="150" width="200">
                            <img src="Assets/IMG/India_tourism.jpg" height="150" width="200">
                            </marquee></div>
                            </div>
                         <div class="col-md-6">
        
        <table align='center' border="2"><br>
        <tr align='center'><th align='center'>Train-Number</th><th align='center'>Train Name</th>
         <?php
         include("connection.php");
        $sql="select * from train";
        $rs=mysqli_query($con,$sql);
                 echo"<th align='center'>Ticket Price</th>
                  <th align='center'>Boarding</th>
                  <th align='center'>Destination</th>
                  <th align='center'>Seats</th>";
        while($value=mysqli_fetch_assoc($rs))
        {
        echo"<tr align='center'><td >".$value["trainno"]."</td><td>".$value["trainname"]."</td><td>".$value["rate"]."</td><td>".$value["Boarding"]."</td><td>".$value["Destination"]."</td><td>".$value["seats"]."</td></tr>";
        }?>
         </table>
                  </div>
                    </div></div>
                    
                </div>
                
                
               <div id="foot" align="center">
                  <br><br><br><b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
            </div>
        </div>
        
    </body>
</html>
