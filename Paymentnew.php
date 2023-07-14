<?php

session_start();
 

$fare1=$_SESSION['fare'];


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


    <title>Payment</title>
  </head>
  <style>
  body{
  background:url('img3.jpg');
  background-attachment: fixed;
  background-size: cover;

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
  <body>
    
  <br>
  
  
    <h1>Book your Ticket</h1>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="post" action="paytotic.php">

     <div class="row">
     <h2>Make Payment</h2>
          <div class="form-group col-6">
         
          <img src="creditcards.jpg" width="600" height="100"/>
          </div>
          </div>

<br>

       <div class="row">

       <div class="form-group col-3">
       <label>Card Number</label>
       </div>
       <div class="form-group col-6">  
       <input type="number" name="cnumber" class="form-control" placeholder="Card number" required> 
       </div>
       </div>
       <br>

       <div class="row">

        <div class="form-group col-3">
         <label>Name on Card</label>
        </div>
         <div class="form-group col-6">  
         <input type="text" name="nameoncard1" class="form-control" placeholder="name on card" required> 
          </div>
         </div>
       

         <br>

          <div class="row">

          <div class="form-group col-3">
           <label>CVV Number</label>
          </div>
           <div class="form-group col-6">  
           <input type="number" name="cvvnumber" class="form-control" placeholder="cvv number" required> 
           </div>
            </div>
           
            <br>

<div class="row">

<div class="form-group col-3">
 <label>Total Amount</label>
</div>
 <div class="form-group col-6">  
 <label><?php echo $fare1."/-"; ?></label>
 </div>
  </div>  
     
      <br>
           <center>
          <div class="row">
          <div class="form-group">
          <input type="submit"  class="btn btn-danger" value="Make Payment" name="Make_Payment">
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