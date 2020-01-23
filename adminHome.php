<html>
    
    <head>     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="Assets/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/Rail_Reservation_CSS.css">
        <title>Rail Reservation</title>
    </head>
    <body style="background-color:#F7F9FB;">
        
        <div>
            <div class="container-fluid" align="center">
                 <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b></div>
        <div class="container">
    <div class="row">
    <div class="col-md-6">
       <b><table align="left"><tr><td align="left"><?php
                                                     session_start();?>
           <a href="admindashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></td></tr></table></b>
     </div>
<div class="col-md-6" align="right">
                         <table><tr><td><b><a href="index.php"><input type="button" class="btn btn-outline-danger px-3" value="Logout"> </a></b></td></tr></table></div></div></div></div>   

                
                <div class="container">
       
                    <div align="center">
                        
                        <b><font size="5" face="Baskerville Old Face" >Important Link</font></b>
                    <br><hr><br>
                    <form action="addTrain.php"><button style="width: 80%;height: 12%" class="btn btn-outline-primary"><b>Add Train</b></button><br><br></form>
                    <form action="showtrain.php"><button href="showTrain" style="width: 80%;height: 12%"class="btn btn-outline-success"><b>Show/ Remove Train</b></button><br><br></form>
                    <form action="showbooking.php"><button href="showBooking" style="width: 80%;height: 12%" class="btn btn-outline-success"><b>Show/ Remove Booking</b></button><br><br></form>
                    <form action="showuser.php"><button href="showUser"class="btn btn-outline-danger" style="width: 80%;height: 12%"><b>Show/ Remove user</b></button><br></form>
                    
                    </div>
                
                    
                </div>
                
                
                <div id="foot" align="center">
                    <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
      </body>
</html>
