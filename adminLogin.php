<html>
    <head>
             <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="Assets/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/CSS/Rail_Reservation_CSS.css"> <link rel="icon" href="Assets/IMG/minilogo.png" type="image/x-icon">
        <title>Rail Reservation</title>
    </head>
    <body style="background-color:#F7F9FB;">
        
        <div>
            
                
                <div><br>
                     <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b>
                 <hr></div>
               <font size="3" face="Baskerville Old Face" class="font-weight-normal"> 
            <div class="container"> 
             <div class="row">   
<div class="col-md-3">
                   <a>  <b ><input type="button" class="btn btn-light" value="Links-->"></b></a> </div>
   <div class="col-md-3"> <a href="index.php"><input type="button" class="btn btn-light" value="Home"></a></div>
                 <div class="col-md-3"><a href="contactUs.php"><input type="button" class="btn btn-light" value="Contact Us"></a></div>
    <div class="col-md-3">  <a href="register.php"><input type="button" class="btn btn-outline-success" value="Register here!!"></a></div>
</div></div></font>  
        <hr>   
                <div class="container">
                    <div>
                    <form action="Checkadminlogin.php" method="POST">
                        <table align="center">
                        <tr><td colspan="2" align="center"><b><font size="5" face="Baskerville Old Face">Administration Login</font></b></td></tr>
                   
                    <tr><td>  <font size="4" face="Baskerville Old Face">Email</font>
                          </td><td>
                        <input type="email" id="username" name="username" required autofocus ></td></tr>
                        
                      <tr><td>  <font size="4" face="Baskerville Old Face" required>Password</font></td>
                          <td>  <input type="password" id="pass" name="pass"></td></tr>
                     
                        
                        <tr><td colspan="2" align="right"><input type=submit value="Sign In" name="submit"  class="btn  btn-outline-primary" ></td></tr>
                   </table>
                        </form>
                    </div>
                     <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
                    
                    </div>
                    <div id="foot" align="center">
                   <br><br><br><br><br><br> <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>
            
        </div>
        
    </body>
</html>
