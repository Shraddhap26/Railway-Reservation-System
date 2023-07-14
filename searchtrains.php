<?php

$host="localhost";
$user="root";
$pass="";
$dbname="railway";
$conn=mysqli_connect($host,$user,$pass,$dbname);
$query="SELECT source FROM railways";
$result1=mysqli_query($conn,$query);

$conn=mysqli_connect($host,$user,$pass,$dbname);
$query1="SELECT destination FROM railways";
$result2=mysqli_query($conn,$query1);

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


    <title>Search Trains</title>
  </head>
<style>
body{
  background:url(orange1.jpg);
  background-attachment: fixed;
  background-size: cover;

 }
 


</style>


  <body>
  
  <br>
   <center></center><br>
    <h2><img src="trainpurple_48.png" alt="">Search train According to your source and destination </h2>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="POST" action="Availabletrains.php">

     

     <div class="row">

<div class="form-group col-3">
<label>From City</label>
</div>
<div class="form-group col-6">  
<select class="form-control" name="so1">
    
<option >Select</option>";
    <?php  while($row1=$result1->fetch_assoc()) 
    {
      $source1=$row1['source'];
      echo"<option>$source1</option>";

    }   
    ?>



</select>
</div>
</div>

<br>
<div class="row">

<div class="form-group col-3">
<label>To City</label>
</div>
<div class="form-group col-6">  
<select class="form-control" name="dest" >
      
      <option >Select</option>";
     <?php  while($row2=$result2->fetch_assoc()) 
    {
      $dest1=$row2['destination'];
     

      echo"<option >$dest1</option>";

    }      ?>




</select>
</div>
</div>
<br>

<div class="row">

<div class="form-group col-3">
<label>Date</label>
</div>
<div class="form-group col-6">  
<input type="date" name="date" class="form-control" required>
</div>
</div>

<br>
           <center>
          <div class="row">
          <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Search Train" name="search">
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


