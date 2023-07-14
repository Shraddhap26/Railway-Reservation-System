

<?php

session_start();
 if(isset($_POST['cont_payment'])){

  $Aadharno=$_POST['aadharno'];
  $_SESSION['aadhar1']=$Aadharno;
  echo $Aadharno;
  $seat1=$_POST['seats'];
  $_SESSION['s1']=$seat1;
  echo $seat1;
  //$_SESSION['seat2']=$seat1;
 
}
$s2=$_SESSION['s1'];
$a1=$_SESSION['aadhar1'];
$p1=$_SESSION['price'];
$fare1= $s2 * $p1;


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
  <body>
    
  <br>
  <h2>Welcome <?php echo "hii" .$a1; ?></h2>
  <h2>Welcome <?php    echo "hii". $_SESSION['price'];  ?></h2>
    <h1>Book your Ticket</h1>
    <br>
    <div class="container">
     <div class="myform">
     <form class="" id="" name="" method="post" action="">

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
       <input type="number" name="cnumber" class="form-control" placeholder="Card number"> 
       </div>
       </div>
       <br>

       <div class="row">

        <div class="form-group col-3">
         <label>Name on Card</label>
        </div>
         <div class="form-group col-6">  
         <input type="text" name="nameoncard1" class="form-control" placeholder="name on card"> 
          </div>
         </div>
       

         <br>

          <div class="row">

          <div class="form-group col-3">
           <label>CVV Number</label>
          </div>
           <div class="form-group col-6">  
           <input type="number" name="cvvnumber" class="form-control" placeholder="cvv number"> 
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

<?php




 $host="localhost";
 $user="root";
 $pass="";
 $dbname="railway";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 if($conn){

  echo(" Connection successful!");
  
   }else{
      echo(" Connection failed!");
   }


   if(isset($_POST['Make_Payment'])){
  $Cardno=$_POST['cnumber'];
  $Nameoncard=$_POST['nameoncard1'];
  $CVV=$_POST['cvvnumber'];
  $fare1;
   
  
  $query2="UPDATE booking SET cardno='$Cardno', nameoncard='$Nameoncard', cvvno='$CVV' , fare='$fare1' WHERE aadharno='$a1'";
  $data=mysqli_query($conn,$query2);
 if($data){
  //echo "<script>alert('Record Updated</script><?php echo .$a1;//<script>')</script>"; 
   echo"Record updated";
 

 }else {
   echo"Failed to update";
 }



   }else {
    echo"Button not pressed";
   
   }

?>