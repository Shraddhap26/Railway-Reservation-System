<?php
session_start();


if(isset($_POST['register1']))
  {
   
    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $date1=date('Y-m-d',strtotime($_POST['date']));
        $acn=$_POST['aadhar'];
        $_SESSION['mainaadhar']=$acn;
        $len= strlen ($acn); 
        $gen=$_POST['gender'];
        $mobileno=$_POST['mobileno'];
        $len2=strlen('$mobileno');
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $address=$_POST['address'];
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
              if (!preg_match ("/^[a-zA-z]*$/", $firstname) ) 
        {  

           echo"<script>alert('In Firstname only alphabets are allowed.');window.location='registernew.php'</script>";
                 
              
        } 
     elseif(!preg_match ("/^[a-zA-z]*$/", $lastname))
     {

      echo"<script>alert('In Lastname only alphabets are allowed.');window.location='registernew.php'</script>";

     }   
     elseif (!preg_match ("/^[0-9]*$/", $acn) )
			   {  
               echo"<script>alert('Please Enter valid numeric Aadhar card number.');window.location='registernew.php'</script>";
               } 

    elseif( ($len < 12) || ($len > 12)) {  
       echo"<script>alert('Aadhar card number must have 12 digits.');window.location='registernew.php'</script>"; 
                          
    }   
         elseif($gen == 'Select')
     {

      echo"<script>alert('Please select your Gender.');window.location='registernew.php'</script>";

     }  
     elseif (!preg_match ("/^[0-9]*$/", $mobileno) )
     {  
        echo"<script>alert('Please Enter valid numeric Mobile number.');window.location='registernew.php'</script>";
        } 

     elseif ($len2 < 10 && $len2 > 10){  
      echo"<script>alert('Mobile number must have 10 digits.');window.location='registernew.php'</script>"; 
              
     }   
    
     elseif(!preg_match ($pattern, $email) )
   {  
      echo"<script>alert('Email is not valid.');window.location='registernew.php'</script>"; 
      
   }  
   elseif (!preg_match ("/[A-Za-z0-9\-\\,.]+/", $address) ) 
		{  
         echo"<script>alert('In Address only alphabets and whitespace are allowed.');window.location='registernew.php'</script>"; 
                   
               
		}    


   else{


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

 

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $date1=date('Y-m-d',strtotime($_POST['date']));
        $acn=$_POST['aadhar'];
        $gen=$_POST['gender'];
        $mobileno=$_POST['mobileno'];
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $address=$_POST['address'];

        $query="insert into userregistration(fname,lname,aadharno,bdate,gender,address,email,mobno,psw) values('$firstname','$lastname','$acn','$date1','$gen','$address','$email',$mobileno,'$psw')";
        $data=mysqli_query($conn,$query);
        if($data){

         echo(" Registered successful!");
   
        }else{
         echo(" Registration failed!");
       }
       echo"<script>alert('Registration Completed Successfully!!!');window.location='loginnew.php'</script>"; 
      //header('location:loginnew.php');

   }

 }  

?>