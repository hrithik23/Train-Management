
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
       <div class="col-md-6" align="left"> <b><font size="4"  face="Baskerville Old Face">Welcome <?php session_start();  echo  $_SESSION['username'];?></font></b></div>
            <div class="col-md-6" align="right"><a href=UserHome.php><input type="button" class="btn btn-light" value="Back"></a></div></div></div>
       <div><font size="4" face="Baskerville Old Face">
           <form action="change_user_password.php" method="post">
           <b><table align="center"><tr><td>Old Password: </td><td><input type=password class="form-control" name="txt1" id="txt1"  autofocus required></td></tr><tr><td>New Password: </td><td><input type=password class="form-control" name="txt2" id="txt2" required></td></tr>
        <tr><td>Confirm Password: </td><td><input type=password class="form-control" name="txt3" id="txt3" required></td></tr>
               <tr><td colspan="2" align="right"><input type=submit value="Submit" name="btn-1" class="btn btn-outline-primary"></td></tr>   
               </table></b></form></font></div></div>
              
 <div class="container-fluid" align="center">
                   <br><br><br><br><b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp;<font size="5" face="Baskerville Old Face">Rail Yatra.</font></b></div></body></html>


        
