<?php
/* Code for Validation(using regular expression and preg_match) */
session_start();
if(isset($_POST['cont_payment1']))
{
  $mainadd= $_SESSION['mainaadhar'];
  
$pname1=$_POST['pname'];
$Aadharno=$_POST['aadharno'];
$len=strlen($Aadharno);
$age1=$_POST['age'];
$gen1=$_POST['gender'];
$seat1=$_POST['seats'];
$mobileno1=$_POST['mobileno'];
$len2=strlen($mobileno1);
  /* Code for Validating name */
      $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
            if (!preg_match ("/^[a-zA-z ]*$/", $pname1) ) 
      {  

         echo"<script>alert('In Passenger name only alphabets and whitespace are allowed.');window.location='searchtrains.php'</script>";
               
            
      } 
    /* Code for Validating aadhar card no. and it should be 12 digit*/
   elseif (!preg_match ("/^[0-9]*$/ ", $Aadharno) )
          {  
             echo"<script>alert('Please Enter valid numeric Aadhar card number.');window.location='searchtrains.php'</script>";
             } 

  elseif( ($len<12) || ($len>12)) {  
     echo"<script>alert('Aadhar card number must have 12 digits.');window.location='searchtrains.php'</script>"; 
                        
  }   
 
  elseif (!preg_match ("/^[0-9]*$/ ", $age1) )
  {  
     echo"<script>alert('Please Enter valid Age.');window.location='searchtrains.php'</script>";
     } 
       elseif($gen1 == 'Select')
   {

    echo"<script>alert('Please select your Gender.');window.location='searchtrains.php'</script>";
   

   }  
   elseif (!preg_match ("/^[0-9]*$/ ", $mobileno1) )
   {  
      echo"<script>alert('Please Enter valid numeric Mobile number.');window.location='searchtrains.php'</script>";
      } 

   elseif ($len2 < 10 || $len2 > 10){  
    echo"<script>alert('Mobile number must have 10 digits.');window.location='searchtrains.php'</script>"; 
            
   }   
  
   


 else{


 

/* $host="localhost";
 $user="root";
 $pass="";
 $dbname="railway";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 if($conn){

    echo(" Connection successful!");

 }else{
    echo(" Connection failed!");
 }*/

 

 

  $pname1=$_POST['pname'];
  $Aadharno=$_POST['aadharno'];
   $age1=$_POST['age'];
  $gen1=$_POST['gender'];
  $seat1=$_POST['seats'];
  $mobileno1=$_POST['mobileno'];
  $_SESSION['passengername']=$pname1;
  $_SESSION['aadharno']=$Aadharno;
  $_SESSION['page']=$age1;
  $_SESSION['gen']=$gen1;
  $_SESSION['mobno']=$mobileno1;

  $_SESSION['seats']=$seat1;

 $f1=$_SESSION['price']*$seat1;
 $_SESSION['fare']=$f1;
 $tn=$_SESSION['Tno'];
 $fc=$_SESSION['from'];
 $tc=$_SESSION['to'];
 $d3=$_SESSION['date'];
 $t3=$_SESSION['time'];
 header('location:Paymentnew.php');
  
 /* $query="insert into booking(bpname,aadharno,bage,bgender,seats,bmobno,trainno,fromcity,tocity,date,time,fare) values('$pname1','$Aadharno','$age1','$gen1','$seat1','$mobileno1','$tn','$fc','$tc','$d3','$t3','$f1')";
  $data=mysqli_query($conn,$query);
  if($data==1){
   $_SESSION['passengername']=$pname1;
  $_SESSION['aadharno']=$Aadharno;
  $_SESSION['page']=$age1;
  $_SESSION['gen']=$gen1;
  $_SESSION['seats']=$seat1;

  header('location:Paymentnew.php');
  }*/

}
}

?>
