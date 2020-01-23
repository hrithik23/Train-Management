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
        
        <div >
            <div >
                
                <div><br>
                    <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b>
                 <hr></div>
                <font size="3" face="Baskerville Old Face" class="font-weight-normal"> 
            <div class="container"> 
             <div class="row">   
<div class="col-md-3">
                   <a>  <b ><input type="button" class="btn btn-light" value="Links-->"></b></a> </div>
   <div class="col-md-3"> <a href="index.php"><input type="button" class="btn btn-light" value="Home"></a></div>
                 <div class="col-md-3"> <a href="contactUs.php"><input type="button" class="btn btn-light" value="Contact Us"></a></div>
                 <div class="col-md-3"><a href="adminLogin.php"><input type="button" class="btn btn-light" value="Admin Login"></a></div>
    
</div></div></font>  
                
                <div><center><table align="justified">
                 <form action="register_done.php" method="POST">
                                        <font size="2" face="verdana">
                                            <tr><td align="center" colspan="2"><b><u>Register here</u></b></td></tr>
					<tr></tr><tr>&nbsp;</tr><tr>&nbsp;</tr>
					<tr>
					<td><b>Full Name</b></td>
                        <td><input type="text" name="studentname" id="studentname" required autofocus></td>
					</tr>
                                        <tr>
					<td><b>Email</b></td>
					<td><input type="text" name="studentemail" id="studentemail" required></td>
                        </tr></font>
                                        <font size="2" face="verdana">
                                                <tr>
                                            <td><b>Date Of Birth</b></td>
					<td><input type="Date"name="date" id="date" ></td>
					</tr>
                    <tr>
					<td><b>Gender</b></td>
                    <td><select class="form-control" name="gender" id="gender" required>
                 <option value="Male">Male</option>
                <option value="Female">Female</option>
                                            </select></td>
					</tr>
        <tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr></font>
        <font size="2" face="verdana">
    <tr><td><b>Mobile number</b></td>
					<td><input type="text" name="mob" id="mob" required></td>
					</tr><tr>    
					<td><b>Address</b></td>
					<td><input type="text" name="add" id="add" required></td>
					</tr>
					<tr>
					<td><b>Password</b></td>
					<td><input type="password" name="pass" id="pass" required></td>
					</tr>
                                        <tr>
					<td><b>Confirm Password</b></td>
					<td><input type="password" name="repass" id="repass" required></td>
					</tr></font>
<tr><td><button type="reset" class="btn btn-danger">Clear</button></td>
                    <td align="right"><button type="submit"class="btn btn-success"> Register</button></td></tr>
				
                                        </form>
					</table>
				

</center>
                </div>
                 </div>
        </div>
                
                <div id="foot" align="center">
                    <br><br><b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
           
        
    </body>
</html>
