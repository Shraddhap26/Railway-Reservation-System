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
    
 


 $email=$_POST['email'];
 $psw=$_POST['psw'];
 $sql="select * from userregistration where email='$email' && psw='$psw'";
 $result=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($result);
 if($num==1)
 {

    $_SESSION['username']=$email;
    echo"<script>alert('Login Successful!!!');window.location='loginmenu.php'</script>"; 
    //header('location:searchtrains.php');
 }else{
    echo"<script>alert('Login Failed!. Please try again');window.location='loginnew.php'</script>"; 
    
 }


 }

?>