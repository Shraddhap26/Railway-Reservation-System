<?php
include('homenew.php');
?>
<!DOCTYPE html>

<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

	<form action="" method="POST">
   <div class ="container">
   
      <h2> REGISTRATION</h2> <br>     
	  

       <label class="label control-label">First name: </label>
       <input  type="text" name="firstname" required><br><br>

         <label for="lastname">Last name: </label>
       <input  type="text" name="lastname" required>
       <br><br>

        <label for="age">Age: </label>
       <input type="text" name="age" required>
        <br><br>
	   
        <label for="address">Address: </label>
       <input  type="text" name="address" required>
       <br><br>

       <label for="email">Email Id: </label>
       <input  type="email" name="email" required><br><br>
	    
       <label for="mobileno">Mobile No: </label>
       <input  type="text" name="mobileno" required><br><br> 

       <label for="password">Password: </label>
       <input  type="password" name="psw" required><br/><br/>  
	  
       

	   <input class="btn btn-primary"type="submit" name="register1" value="Register"><br><br>
	   	  Have an account? <a href="login.php">   Sign in</a>
	   
	   </div>
	   
	    
   
   </form>
  </div>
  


</body>
</html>

<?php
		if(isset($_POST['register1']))
	 {
     include('displaymsg.php');
		 
		$firstname = $_POST ["firstname"];  
               if (!preg_match ("/^[a-zA-z]*$/", $firstname) ) 
			   {  

            echo"<script>alert('In Firstname only alphabets and whitespace are allowed.');window.location='register.php'</script>";
                   $ErrMsg = "In Firstname only alphabets and whitespace are allowed.";  
                   echo $ErrMsg;  
				   echo"<br>";
               
			   } 
			   else 
			   {  
                  echo "Your First Name is: ".$firstname; 
				  echo"<br>";
                  			  
               }  
			   
		$lastname = $_POST ["lastname"];  
               if (!preg_match ("/^[a-zA-z]*$/", $lastname) ) 
			   {       echo"<script>alert('In Lastname only alphabets and whitespace are allowed.');window.location='register.php'</script>";
                   $ErrMsg = "In Lastname only alphabets and whitespace are allowed.";  
                   echo $ErrMsg;  
				   echo"<br>";
               
			   } 
			   else 
			   {
				   echo "Your Last Name is: " .$lastname;  
				   echo"<br>";				  
               } 
			   
		$age = $_POST ["age"];  
               if (!preg_match ("/^[0-9]*$/", $age) )
			   {  
                 $ErrMsg = "In Age only numeric value is allowed.";  
                 echo $ErrMsg;  
				 echo"<br>";
               } 
			   else
			   {  
                 echo "Your age is: " .$age; 
                 echo"<br>";				 
                }  	  
				
		$address = $_POST ["address"];  
               if (!preg_match ("/^[a-zA-z]*$/", $address) ) 
			   {  
                   $ErrMsg = "In Address only alphabets and whitespace are allowed.";  
                   echo $ErrMsg;  
				   echo"<br>";
               
			   } 
			   else 
			   {  
                  echo "Your valid address is: " .$address;  
				  echo"<br>";
               } 
			   
		 $email = $_POST ["email"];  
         $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
           if (!preg_match ($pattern, $email) )
		   {  
				$ErrMsg = "Email is not valid.";  
				echo $ErrMsg;  
				echo"<br>";
		   }
		   else
	       {  
                echo "Your valid email address is: " .$email; 
                echo"<br>";				
           }  
		 
        $mobileno=$_POST["mobileno1"]; 
        if (!preg_match ("/^[0-9]*$/", $mobileno1) )
		{  
                 $ErrMsg = "In Mobileno only numeric value is allowed.";  
                 echo $ErrMsg;
                 echo"<br>";
        } 
		else 
		{  
                 echo "Your valid Mobile Number is: " .$mobileno;
                 echo"<br>";				 
        }  
        $password=$_POST["psw"]; 
        if (!preg_match ("/^[0-9]*$/", $password) )
		{  
                 $ErrMsg = "Only numeric value is allowed.";  
                 echo $ErrMsg;  
        } 
		else 
		{  
                 echo "Your valid password is: " .$password;
                 echo"<br>";				 
        }  
	 }


		?>