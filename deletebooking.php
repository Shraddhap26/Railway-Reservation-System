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

$bookingID=$_GET['bid'];
$query="DELETE FROM booking WHERE b_id='$bookingID'";
$data=mysqli_query($conn,$query);

if($data){

    echo"<script>alert('Ticket Cancelled Successfully!!!');window.location='My Booking.php'</script>"; 
}
else{

    echo"<script>alert('Ticket not Cancelled');window.location='My Booking.php'</script>"; 
}


?>