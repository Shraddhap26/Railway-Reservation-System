<?php
session_start();
$tn=$_GET['Trainno'];
$_SESSION['Tno']=$tn;

$price=$_GET['pr'];
$_SESSION['price']=$price;

$from=$_GET['fc'];
$_SESSION['from']=$from;

$to=$_GET['tc'];
$_SESSION['to']=$to;

$d2=$_GET['d1'];
$_SESSION['date']=$d2;

$t2=$_GET['t1'];
$_SESSION['time']=$t2;



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


    <title>Booking</title>
  </head>
  <style>
   body{
  background:url('img3.jpg');
  background-attachment: fixed;
  background-size: cover;

 }
  
  
  </style>
  <body>
  
  <br>
    <h1>Book your Ticket</h1>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="post" action="bookingconnect.php">

  
     
       <div class="row">

       <div class="form-group col-12">
       <label>Passenger Name</label>
       <input type="text" name="pname" class="form-control" placeholder="Passenger Name" required>
       
       </div>
       </div><p>

       <div class="row">

<div class="form-group col-8">
<label>Aadhar Card Number</label>
<input type="Number" name="aadharno" class="form-control" placeholder="aadhar card number" required>

</div>



</div><p>
     
       <div class="row">
          <div class="form-group col-6">
          <label>Age</label>
          <input type="Number" name="age" class="form-control" placeholder="Age" required>
           </div>
            <div class="form-group col-6">
              <label>Gender</label>
                <select class="form-control" name="gender" required>
                <option>Select</option>
                 <option>Female</option>
                 <option>Male</option>
         
                </select>
            </div>


        </div><p>

          <div class="row">
          <div class="form-group col-6">
          <label>No. of Seats</label>
          <input type="Number" name="seats" class="form-control" placeholder="No of Seats" required>
          </div>
          <div class="form-group col-6">
          <label>Mobile No.</label>
          <input type="Number" name="mobileno" class="form-control" placeholder="mobile number" required>
          </div>
         </div>
          <br>
           <center>
          <div class="row">
          <div class="form-group">
          <a href="Paymentnew.php"><input type="submit"  class="btn btn-danger" value="Continue to Payment" name="cont_payment1"></a>
          </div>
          </div>
          </center>
      </form>
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

