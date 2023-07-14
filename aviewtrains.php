


<html>
<head>
    <title> All Trains</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="style1.css" rel="stylesheet">
    			
</head>
<style>
body{
  background-image: url('orange1.jpg');
  background-size:cover  ;
  margin:0;
}
</style>

<body>
<br>
<br>
<center><h2>Available Trains</center></h2>
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
              $q="SELECT * FROM railways";
              $query_run=mysqli_query($conn,$q);
              $check_railways=mysqli_num_rows($query_run)>0;

               if($check_railways)
               {
                 while($row=mysqli_fetch_assoc($query_run))
                  {
                      ?>
                        <div  class="col-md-4">
                         <div class="card" >
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
                              
                               </p>
                           </div>
                           
                         </div>
                         <br>
                        
                       </div>
                       
                       

                      <?php

                
                   
                  }
                }
                else {
                  echo"<script>alert('No Trains available.');window.location='loginmenu.php'</script>";
                  
                }

             }
          
                 

 ?>
   
  </div>
</div>
</body>
</html>
