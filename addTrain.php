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
        
        <div>
            <br>
     <div class="container-fluid">
     <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal" > Rail Yatra</font></td></tr></table></b></div>
            <div class="container">
    <div class="row">
    <div class="col-md-6">
        <b><table align="left"><tr><td align="left"><?php
                                                     session_start();?>
           <a href="admindashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></td></tr></table></b>
     </div>
<div class="col-md-6" align="right">
                         <b><a href="index.php"><input type="button" class="btn btn-outline-danger px-3" value="Logout"> </a></b></div></div></div></div>
                <hr>
                
                <div>
                    <center>
									<table>
                                            <form action="addTrain_check.php" method="post" >
                                            <tr><font size="2" face="verdana"><b>&nbsp;<u>Add Train</u></b></font></tr>
					<tr></tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
					<tr>
                        <td><font size="2" face="verdana"><b>Train Name</b></font></td>
					<td><input type="text" name="studentname" id="studentname" required></td>
					</tr>
                                        <tr>
                                            <td><font size="2" face="verdana"><b>Train no.</b></font></td>
					<td><input type="text" name="studentemail" id="studentemail" required></td>
					</tr>
                                        <tr>
                                            <td><font size="2" face="verdana"><b>Ticket Rate</b></font></td>
					<td><input type="text" name="rate" id="rate" required></td>
					</tr>
                            
                         <tr>
                                             <td><font size="2" face="verdana"><b>From</b></font></td>
                                        <td><select class="form-control" name="froms" id="froms" required>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Delhi">Delhi</option>
                                            </select></td>
					</tr>
                                         <tr>
                                             <td><font size="2" face="verdana"><b>to</b></font></td>
                                        <td><select class="form-control" name="tos" id="tos" required>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Delhi">Delhi</option>
                                            </select></td>
					</tr>
					 <tr>
                         <td><font size="2" face="verdana" ><b>Max Seats</b></font></td>
					<td><input type="text" name="seat" id="seat" required></td>
					</tr>
                    <tr></tr>
					<tr><td align="center"><input type="reset" name="reset" value="Clear" class="btn btn-outline-danger"></td>
                    <td align="center"><input type="submit" name="submit"  class="btn btn-outline-primary"></td>
					</tr>
                                        </form>
					</table>
				
			</center>
                </div>
                
                
                <div id="foot" align="center">
                    <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
        </body>
</html>
