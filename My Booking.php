<?php
session_start();

$a1= $_SESSION['aadharno'];

$host="localhost";
 $user="root";
 $pass="";
 $dbname="railway";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 if(!$conn){

echo("Connection failed!");

 }else{
 $sql="SELECT * FROM booking where aadharno='$a1'" ;
 $result=mysqli_query($conn,$sql);
 

   

  




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


    <title>myBooking</title>
  </head>
  <style>
  body{
  background-image: url('orange1.jpg');
  background-size:cover  ;
  margin:0;
}
     h4{
        font-weight: 600;
 text-align: center;
 color:white;

     }
     .content-table{
     border-collapse: collapse;
     margin:25px 0;
     font-size:1.0em;
     min-width: 600px;
     border-radius: 7px 7px 0 0;
     overflow:hidden;


     }
     .content-table thead tr{
      background-color: orange;
      color:white;
      text-align: center;
      Font-weight:bold;

     }
     .content-table th,
     .content-table td{
         padding:12px 15px;
     }

     .content-table tbody tr{

        border-bottom: 1px solid #dddddd;
      
     }

     .content-table tbody tr:nth-of-type(even){

        background-color:#f3f3f3;
     }
     .content-table tbody tr:last-of-type{

        border-bottom:2px solid orange;
     }
     .myform1{
background:white;
width:70%;
height: 100%;
padding: 25px 25px 25px 25px;
border-radius: 10px;
margin: auto;
 }


    </style>
  <body>
  
  <br>
  <?php echo "<a href=\"loginmenu.php\"><input type='submit' class='btn btn-success' value='Home' name='logout'></a>"; ?>
  <?php echo "<a href=\"logout.php\"><input type='submit' class='btn btn-success' value='Logout' name='logout'></a>"; ?><p>
   <h4> My Booking</h4>
    <br>
    
    
     <div class="myform1">
     <img src="train_24.jpg">My All Train Ticket Booking
         <table class="content-table">
             <thead>
                 <tr>
                     <th>Booking ID</th>
                     <th>Name </th>
                     <th> Train no </th>
                     <th> From City </th>
                     <th>To City</th>
                     <th>Date</th>
                     <th>Time</th>
                     <th>Seats</th>
                     <th>Fare</th>
                     <th>Operation</th>
                 </tr>
             </thread>
             <tbody>
             <?php
             
             if(mysqli_num_rows($result)>0)
              {
                while($row=mysqli_fetch_assoc($result)){
             
             
             ?>
                 <tr>
                     <td><?php echo $row['b_id'];  ?></td>
                     <td><?php echo $row['bpname'];  ?></td>
                     <td><?php echo $row['trainno'];  ?></td>
                     <td><?php echo $row['fromcity'];  ?></td>
                     <td><?php echo $row['tocity'];  ?></td>
                     <td><?php echo $row['date'];  ?></td>
                     <td><?php echo $row['time'];  ?></td>
                     <td><?php echo $row['seats'];  ?></td>
                     <td><?php echo $row['fare'];  ?>/-</td>
                     <td><?php echo "<a href=\"deletebooking.php?bid=$row[b_id]\"><input type='submit'  class='btn btn-danger' value='Cancel' name='delete'></a>"; ?></td>
                 </tr>

                 <?php
                 
                   }
                  }else 
                   {
                    echo"No results ";
                   }
           
           
           
                   }
                 
                   ?>
                
     
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