<?php
$source1=$_POST['so1'];

$destination=$_POST['dest'];

$date1=$_POST['date'];


if(isset($_POST['search']))
  {
   
    
        
             
    if($source1 == 'Select')
     {

      echo"<script>alert('Please select your Source.');window.location='searchtrains.php'</script>";

     }  
     elseif($destination == 'Select')
     {

      echo"<script>alert('Please select your Destination.');window.location='searchtrains.php'</script>";

     }  
     else
     {


?>


<html>
<head>
    <title> Availabletrains</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    			
</head>
<style>
body{
  background-image: url('orange1.jpg');
  background-size:cover  ;
  margin:0;
}
h3{
  color: red;
  background:white;
  height: 50px;
}
</style>

<body>
<br>
<break>
<center><h3><?php echo"Available Trains from  $source1 to $destination on Date $date1"; ?></center></h3>
<div class="container py-5">
 <div class="row mt-4">
  <?php
   session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="railway";
    $conn=mysqli_connect($host,$user,$pass,$dbname);
  
      if(!$conn){

          echo("Connection failed!");

      }else{
              $q="SELECT * FROM railways where source='$source1' && destination='$destination' && Tdate='$date1'";
              $query_run=mysqli_query($conn,$q);
              $check_railways=mysqli_num_rows($query_run)>0;

               if($check_railways)
               {
                 while($row=mysqli_fetch_assoc($query_run))
                  {
                      ?>
                        <div  class="col-md-4">
                         <div class="card">
                           <div class="card-body">
                             <img src="train6.jpg" clss="card-img-top" alt="Images" width="70" height="70"> 
      
                               <h6 class="card-title">Express</h6>
     
                               <p class="card-text">
                               Train no :  <?php echo $row['Trainno'];     ?><br>
                               From City :  <?php echo $row['source'];   ?><br>
                               To City :  <?php echo $row['destination'];   ?><br>
                               Date :  <?php echo $row['Tdate'];   ?><br>
                               Time :  <?php echo $row['time'];   ?><br>
                               Price :  <?php echo $row['price'];   ?><br>
                              <center> <?php 
                                echo "<a href=\"bookingnew.php?Trainno=$row[Trainno]&fc=$row[source]&tc=$row[destination]&d1=$row[Tdate]&t1=$row[time]&pr=$row[price]\"><input type='submit' class='btn btn-success' value='Book Now'></a>";  
                                ?></center>
                               </p>
                           </div>
                           
                         </div>
                         <br>
                        
                       </div>
                       
                       

                      <?php

                
                   
                  }
                }
                else {
                  echo"<script>alert('No Trains available.');window.location='searchtrains.php'</script>";
                   echo 'No Railway found';
                }

             }
         } 
       }          

 ?>
   
  </div>
</div>
</body>
</html>
