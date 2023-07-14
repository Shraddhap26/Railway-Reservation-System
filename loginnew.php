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
width:25%;
height: 100%;
padding: 10px 0px 10px 20px;
border-radius: 10px;
margin: auto;
 }


  </style>
  <body>
  <h1>Railway Reservation</h1>
 <br>
    <br>
    <div class="container">
     <div class="myform2">
     <form class="" id="" name="" method="post" action="validationforlogin.php">
     <h2>User Login</h2> 
  
     

      

       <div class="row">
          <div class="form-group col-9">
          <label for="email">Email Id : </label>
          <input  type="email" name="email" class="form-control" placeholder="Email"  required>
          </div><br>
          <div class="form-group col-9">
          <label for="password">Password: </label>
          <input  type="password" name="psw" class="form-control" placeholder="Password" required>
          </div>
         </div>

      

      
      
          <br>
          <center>
          <div class="row">
          <div class="form-group col-10">
          <center><input class="btn btn-primary"type="submit" name="register" value="LOGIN"></center>
          <center> Don't have an account? <a href="registernew.php">   Sign Up</a></center>
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