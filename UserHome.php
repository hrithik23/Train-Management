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
        
        <div class="container-fluid">
           <br>
                    <div align="center"> <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b></div></div>
               <div class="container">
                   <div class="row">
                        <div class="col-md-6"><b><table align="left"><tr ><td align="left"></td></tr></table><?php
                                                     session_start();?>
                            <a href="userdashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></b></div>
                   <div  class="col-md-6"> <table align="right"><tr ><td align="right"><b><a href="index.php">
                       <input type= "button"  class="btn btn-outline-danger" value="Logout"></a></b></td></tr></table></div>
                   </div></div>
             <hr> <div class="container">
                       <div class="row">
                           <div class="col-md-3"><font size="4" face="Baskerville Old Face"><input type="button" class="btn btn-light" value="Things to Do->"></font></div>
                           
                        
                        <div class="col-md-3"><font size="4" face="Baskerville Old Face"><a href="enquiry.php"><input type="button" class="btn btn-light" value="Enquire"></a></font></div>
                        
                       <div class="col-md-3"> <font size="4" face="Baskerville Old Face"><a href="uticket.php"><input type="button" class="btn btn-light" value="Your tickets"></a></font></div>
                       
                    <div class="col-md-3"><font size="4" face="Baskerville Old"><a href="cancel_booking.php"><input type="button" class="btn btn-light" value="Cancel"></a></font></div>
                  </div>  </div>
                    
                <div class="container">
<div class="row">                   
<div  class="col-md-6">
                        <b><font size="5" face="Baskerville Old Face">Photo Gallery</font></b>
                        <br><br>    
                        <marquee behavior="alternate" >
                            <img src="Assets/IMG/df-delhi-2.jpg" height="200" width="200">
                            <img src="Assets/IMG/Things-to-Do-and-Places-to-See-in-Lucknow.png" height="200" width="200">
                            <img src="Assets/IMG/1524061666001.jpg" height="200" width="200">
                                <img src="Assets/IMG/Bangalore.png" height="200" width="200">
                                <img src="Assets/IMG/BannerCardsTrain-1540223430.png" height="200" width="200">
                        </marquee></div>
                        <div class="col-md-6">
                        <form action="BookingDone.php" method="post">
                            <table align="right">
                                
                        <tr><td colspan="2" align="center"><b><font size="5" face="Baskerville Old Face">Book Ticket</font></b></td></tr>
                                <tr><td align="center"><b><font size="4" face="Baskerville Old Face">Name</font></b></td> <td><input type=text class="form-control" name="name" id="name" required></td></tr>
                                <tr><td align="center"><font size="4" face="Baskerville Old Face"><b>From</b></font></td>
                                <td><select class="form-control" name="froms" id="froms" required>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Delhi">Delhi</option>
                            </select></td></tr>
                                        <tr><td align="center"><font size="4" face="Baskerville Old Face"><b>To</b></font></td>
                        <td><select class="form-control" name="tos" id="tos" required>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Delhi">Delhi</option>
                                                </select></td></tr> 
                                            
                        <tr><td align="center"><font size="4" face="Baskerville Old Face"><b>Date</b></font></td>
                                      <td>        <input type="date" name="tdate" required></td> </tr>
                                              <tr><td align="center"><font size="4" face="Baskerville Old Face"><b>No's Adult's</b></font></td>
                      <td> <select class="form-control" name="adult" id="adult" required><option value="0">0</option> 
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td> </tr>
                        <tr><td align="center"><font size="4" face="Baskerville Old Face"><b>No Child's</b></font></td>
                        <td><select class="form-control" name="child" id="child" required>
                            <option value="0">0</option>               
                            <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                    </select></td></tr>
                    <tr><td colspan="2"><input type="submit" value="Book Ticket" name="submit" class="btn btn-outline-success btn-block">
                         </td></tr>
                                                   </table></form> </div>
                    </div></div> 
          
 <div class="container-fluid" align="center">
                   <br><br><br><br><b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp;<font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
        </div> </body> 
    
</html>

