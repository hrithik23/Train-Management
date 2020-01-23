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
    <div class="col-md-6">
    <b><table align="left"><tr><td align="left"><?php
                                                     session_start();?>
           <a href="admindashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></td></tr></table></b>
     </div>
                     
                     
                     <div class="col-md-6" align="right">
                 <b><a href="index.php"><input type="button" class="btn btn-outline-danger" value="Logout"> </a></b></div>
             </div></div>
            <hr>
     <div class="container">
        
        <table align='center' border="2">
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
        <div>
            <br><br><form action="deletetrain.php" method="post">
            <table align="center">
                <tr><td colspan="2" align="center"><font size="4" face="Baskerville Old Face"  class="font-weight-normal">Delete Train</font></td></tr>
                <tr><td> <input type=text placeholder="Enter Train Number" name="txt1"></td><td > <input type="submit" class="btn btn-danger" value="Delete" name="b"></td></tr></table></form>
                     </div>    
    </body>
     
                <div id="foot" align="center">
                    <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>