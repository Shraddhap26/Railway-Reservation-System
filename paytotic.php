<?php

session_start();

 






if(isset($_POST['Make_Payment']))
  {
    $cardno=$_POST['cnumber'];
    $len1=strlen($cardno);
    $ncard=$_POST['nameoncard1'];
    $cvv=$_POST['cvvnumber'];
    $len3=strlen($cvv);
    if( ($len1<16) || ($len1>16)) {  
      echo"<script>alert('Card number must have 16 digits.');window.location='searchtrains.php'</script>"; 
                         
   }   
   elseif(!preg_match ("/^[a-zA-z]*$/", $cname))
     {

      echo"<script>alert('In Name on card only alphabets are allowed.');window.location='searchtrains.php'</script>";

     }   
   
   elseif( ($len3<3) || ($len3>3)) {  
    echo"<script>alert('CVV number must have 3 digits.');window.location='searchtrains.php'</script>"; 
                       
 }   
    else
    {

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
     
      
     
      
     
       $pname1=$_SESSION['passengername'];
       $Aadharno=$_SESSION['aadharno'];
        $age1=$_SESSION['page'];
       $gen1=$_SESSION['gen'];
       $seat1=$_SESSION['seats'];
       $mobileno1=$_SESSION['mobno'];
     
      $f1=$_SESSION['price']*$seat1;
      $_SESSION['fare']=$f1;
      $tn=$_SESSION['Tno'];
      $fc=$_SESSION['from'];
      $tc=$_SESSION['to'];
      $d3=$_SESSION['date'];
      $t3=$_SESSION['time'];
       
       $query="insert into booking(bpname,aadharno,bage,bgender,seats,bmobno,trainno,fromcity,tocity,date,time,fare) values('$pname1','$Aadharno','$age1','$gen1','$seat1','$mobileno1','$tn','$fc','$tc','$d3','$t3','$f1')";
       $data=mysqli_query($conn,$query);
       if($data==1){
        
        echo"<script>alert('Payment Successfull!!!');window.location='ticket.php'</script>"; 
       //header('location:Paymentnew.php');
       }
     

       


    }

}


?>