
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
  <body>
  
  <br>
    <h1>Book your Ticket</h1>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="post" action="Payment.php">

  
       <div class="row">

       <div class="form-group col-12">
       <label>First Name</label>
       <input type="text" name="fname" class="form-control" placeholder="First Name">
       
       </div>
       

       <div class="form-group col-12">
       <label>Last Name</label>
       <input type="text" name="lname" class="form-control" placeholder="Last Name">
       
       </div>
       </div>

       <div class="row">

<div class="form-group col-12">
<label>Aadhar Card Number</label>
<input type="Number" name="aadharno" class="form-control" placeholder="aadhar card number">

</div>



</div>
     
       <div class="row">
          <div class="form-group col-6">
          <label>Age</label>
          <input type="Number" name="age" class="form-control" placeholder="Age">
           </div>
            <div class="form-group col-6">
              <label>Gender</label>
                <select class="form-control" name="gender">

                 <option>Female</option>
                 <option>Male</option>
         
                </select>
            </div>


        </div>

          <div class="row">
          <div class="form-group col-6">
          <label>No. of Seats</label>
          <input type="Number" name="seats" class="form-control" placeholder="No of Seats">
          </div>
          <div class="form-group col-6">
          <label>Mobile No.</label>
          <input type="Number" name="mobileno" class="form-control" placeholder="mobile number">
          </div>
         </div>
          <br>
           <center>
          <div class="row">
          <div class="form-group">
          <input type="submit"  class="btn btn-danger" value="Continue to Payment" name="cont_payment">
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
 session_start();
  $tn=$_GET['Trainno'];
  $_SESSION['Tno']=$tn;
 

  $price=$_GET['pr'];
  $_SESSION['price']=$price;
 



 $host="localhost";
 $user="root";
 $pass="";
 $dbname="railway";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 //if($conn){

  //echo(" Connection successful!");
  
   //}else{
     // echo(" Connection failed!");
   //}


   if(isset($_POST['cont_payment'])){
  $firstname1=$_POST['fname'];
  $lastname1=$_POST['lname'];
  $Aadharno=$_POST['aadharno'];
  $age1=$_POST['age'];
   $gen1=$_POST['gender'];
   $seat1=$_POST['seats'];
  $mobileno1=$_POST['mobileno'];

  
  $query="insert into booking(bfname,blname,aadharno,bage,bgender,seats,bmobno) values('$firstname1','$lastname1','$Aadharno','$age1','$gen1','$seat1','$mobileno1')";
  $data=mysqli_query($conn,$query);
  if($data){

    $_SESSION['aadhar2']=$Aadharno;
    header('location:Payment.php');
    echo "<script>alert('Record Inserted')</script>"; 
    
   
  
   }else {
     echo"Failed to update";
   }



   }else{

    echo("record not inserted");
   }
   


?>

