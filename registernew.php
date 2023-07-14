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
  background:url(train4.jpg);
  background-attachment: fixed;
  background-size: cover;

 }
.myform2{
background:white;
width:35%;
height: 100%;
padding: 25px 25px 25px 25px;
border-radius: 10px;
margin: auto;
 }


  </style>
  <body>
  <h1>Railway Reservation</h1>
 <br>
  
 
    
    <div class="container">
     <div class="myform2">
     <form  action="connect.php"  method="post">
     <h2> Registration</h2> <br>  
  
     
       <div class="row">
       <div class="form-group col-3">
       <label>First name</label>
       </div>
       <div class="form-group col-7">     
       <input  type="text" name="firstname" class="form-control" placeholder="First name" required>
       </div>
       </div><p>

       <div class="row">
       <div class="form-group col-3">
       <label>Last name</label>
       </div>
       <div class="form-group col-7">     
       <input  type="text" name="lastname" class="form-control" placeholder="Last name" required>
       </div>
       </div><p>

       <div class="row">
       <div class="form-group col-3">
       <label>Birth Date</label>
       </div>
       <div class="form-group col-6">     
       <input  type="date" name="date" class="form-control" placeholder="Birthdate" required>
       </div>
       </div><p>


       <div class="row">
       <div class="form-group col-3">
       <label>Aadhar card no.</label>
       </div>
       <div class="form-group col-6">     
       <input  type="number" name="aadhar" class="form-control" placeholder="Aadhar card number" required>
       </div>
       </div>


       <div class="row">
       <div class="form-group col-3">
       <label>Gender</label>
       </div>
       <div class="form-group col-5">     
       <select class="form-control" name="gender">
 <option>Select</option>
<option>Female</option>
<option>Male</option>

</select>
       </div>
       </div><p>


       <div class="row">
       <div class="form-group col-3">
       <label for="mobileno">Mobile No : </label>
       </div>
       <div class="form-group col-6">     
       <input  type="text" name="mobileno" class="form-control" placeholder="XXXXXXXXXX" required> 
       </div>
       </div><p>

       <div class="row">
       <div class="form-group col-3">
       <label for="email">Email Id : </label>
       </div>
       <div class="form-group col-6">     
       <input  type="email" name="email" class="form-control" placeholder="xxx@gmail.com"  required>
       </div>
       </div><p>

      

       <div class="row">
       <div class="form-group col-3">
       <label for="password">Set Password: </label>
       </div>
       <div class="form-group col-6">     
       <input  type="password" name="psw" class="form-control" placeholder="******" required>
       </div>
       </div><p>

       <div class="row">
       <div class="form-group col-3">
       <label for="address">Address: </label>
       </div>
       <div class="form-group col-6">     
       <textarea name="address" class="form-control" placeholder="Address" required></textarea>
       </div>
       </div>
      
          <br>
          <center>
          <div class="row">
          <div class="form-group col-12">
          <center><input class="btn btn-primary"type="submit" name="register1" value="Register"></center>
          <center> Already have an account? <a href="loginnew.php">   Sign in</a></center>
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


<?php
	if(isset($_POST['register1']))
  {
   
    
   $firstname = $_POST ["firstname"];  
              if (!preg_match ("/^[a-zA-z]*$/", $firstname) ) 
        {  

           echo"<script>alert('In Firstname only alphabets and whitespace are allowed.');window.location='registernew.php'</script>";
                  $ErrMsg = "In Firstname only alphabets and whitespace are allowed.";  
                  echo $ErrMsg;  
          echo"<br>";
              
        } 
  }    

?>