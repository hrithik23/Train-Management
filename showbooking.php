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
                   
                 <div>
                     <b><table align="center"><tr><td align="center"><font size="7" face="Baskerville Old Face"  class="font-weight-normal"> Rail Yatra</font></td></tr></table></b></div></div>
       <div class="container">
    <div class="row">
    <div class="col-md-6">
      <b><table align="left"><tr><td align="left"><?php
                                                     session_start();?>
           <a href="admindashboard.php"><input type="button" class="btn btn-outline-success" value="<?php echo $_SESSION['username']?>"></a></td></tr></table></b>
        </div>
<div class="col-md-6" align="right">
                         <b><a href="index.php"><input type="button" class="btn btn-outline-danger px-3" value="Logout"> </a></b></div></div></div>
            <hr>
     <div class="container">
        
        <table align='center' border="2">
        <?php
         include("connection.php");
        $sql="select * from booking";
        $rs=mysqli_query($con,$sql);
                 echo"<th align='center'>Email</th>
                  <th align='center'>Name</th>
                  <th align='center'>Boarding</th>
                  <th align='center'>Destination</th>
                  <th align='center'>Date</th>
                  <th align='center'>Adults</th> <th align='center'>Child</th>";
        while($value=mysqli_fetch_assoc($rs))
        {
        echo"<tr align='center'><td >".$value["Email"]."</td><td>".$value["Name"]."</td><td>".$value["Traveling"]."</td><td>".$value["Destination"]."</td><td>".$value["Date"]."</td><td>".$value["Adults"]."</td><td>".$value["Child"]."</td></tr>";
        }?>
         </table><br><br><br>
        <div>
            <form action="deletebooking.php" method="post">
            <table align="center">
                <tr><td colspan="2" align="center"><font size="4" face="Baskerville Old Face"  class="font-weight-normal">Cancel Booking</font></td></tr>
                <tr><td> <input type=email placeholder="Enter email" name="txt1"></td><td > 
                    <input type=text placeholder="Name" name="txt2"></td></tr><tr><td >
                    <input type=text placeholder="Enter Destination" name="txt3"></td><td  align="right"><input type="submit" class="btn btn-danger" value="Delete" name="b"></td></tr></table></form>
         </div>          
        
        </div>
    </body>
     
                <div id="foot" align="center">
                    <b>&copy;All Right are reserved&nbsp;&nbsp;&nbsp; <font size="5" face="Baskerville Old Face">Rail Yatra.</font></b>
            </div>