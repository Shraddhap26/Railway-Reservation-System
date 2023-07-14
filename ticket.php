<?php

session_start();



  
$passenger1= $_SESSION['passengername'];
$a1=$_SESSION['aadharno'];
$age=$_SESSION['page'];
$gen=$_SESSION['gen'];
$s2=$_SESSION['seats'];
$fare=$_SESSION['fare'];

$tn=$_SESSION['Tno'];
 $fc=$_SESSION['from'];
 $tc=$_SESSION['to'];
 $d3=$_SESSION['date'];
 $t3=$_SESSION['time'];


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet">


    <title>Ticket</title>
    <style>
    
     form{
       background-image:url('skyblue.jpg');
       background-size:cover;
       padding: 10px;

     }

     .myform{
background:white;
width:50%;
height: 100%;
padding: 25px 25px 25px 25px;
border-radius: 10px;
margin: auto;
 }


    </style>
  </head>
  <body>
  
  <br>
  <?php echo "<a href=\"loginmenu.php\"><input type='submit' class='btn btn-success' value='Home' name='logout'></a>"; ?>
  <?php echo "<a href=\"logout.php\"><input type='submit' class='btn btn-success' value='Logout' name='logout'></a>"; ?><p>
    <h2>Your Booking Was Successfull!!!</h2>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="post" action="">
     <h3><center><font color=black ><label>TRAIN TICKET</label></font></center></h3>
      <label>________________________________________________________________________________________</label>
    <br>
       <div class="row">
       <div class="form-group col-6">
       <label>Name of Passenger : </label>
       <label><?php echo $passenger1; ?></label>
       </div>
       <div class="form-group col-6">
       <label>Train no :  <?php echo $tn; ?></label>
       </div>
       </div>
       <br>

       <div class="row">
       <div class="form-group col-6">
       <label>Age : </label>
       <label><?php echo $age; ?></label>
       </div>
       <div class="form-group col-6">
       <label>From City :  <?php echo $fc; ?></label>
       </div>
       </div>
       <br>
 
       <div class="row">
       <div class="form-group col-6">
       <label>Gender : </label>
       <label><?php echo $gen; ?></label>
       </div>
       <div class="form-group col-6">
       <label>To City :  <?php echo $tc; ?></label>
       </div>
       </div>
       <br>

       <div class="row">
       <div class="form-group col-6">
       <label>Number of Seats : </label>
       <label><?php echo $s2; ?></label>
       </div>
       <div class="form-group col-6">
       <label>Date :  <?php echo $d3; ?></label>
       </div>
       </div>
       <br>

       <div class="row">
       <div class="form-group col-6">
       <label>Total Fare : </label>
       <label><?php echo $fare; ?>/-</label>
       </div>
       <div class="form-group col-6">
       <label>Time :  <?php echo $t3; ?></label>
       </div>
       
       </div>
       <br>

      
        
           <center>
          <div class="row">
          <div class="form-group">
         
          </div>
   
          </div>
          </center>
         
      </form>
      <br>
     <center> 
     <?php echo "<a href=\"My Booking.php\"><input type='submit'  class='btn btn-success' value='My Booking' name='print'></a>"; ?></center>

    </div>
   </div>
 






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
