<?php
session_start();
$getusername=$_SESSION['username'];

?>
<html>
<head>
 <title></title>
</head>
<body>
 <h2>Welcome <?php echo "hii".$getusername; ?></h2>
 <h2>Welcome <?php echo "hii".$_SESSION['cart']; ?></h2>
<?php

$host="localhost";
 $user="root";
 $pass="";
 $dbname="railway";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 if(!$conn){

echo("Connection failed!");

 }else{
 $sql="SELECT * FROM userregistration where email='$getusername'" ;
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result))
 {
   while($row=mysqli_fetch_assoc($result)){

    $name1=$row['fname'];
    echo $name1." ";
    $name2=$row['lname'];
    echo $name2." ";
    $age=$row['age'];
    echo $age." ";
    $address1=$row['address'];
    echo $address1." ";
    $email1=$row['email'];
    echo $email1." ";
    $mobno=$row['mobno'];
    echo $mobno." ";
    $psw=$row['psw'];
    echo $psw." ";

   }
 }else 
 {
     echo"No results ";
    }



 }
mysqli_close($conn);




?>




</body>
</html>