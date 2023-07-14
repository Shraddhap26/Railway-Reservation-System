<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	 

     <div id="bodySection">
       <form action="validationforlogin.php" method="POST">         
            

            <h2> LOGIN </h2>
         
            <label for="email">Email Id: </label>
           <input  type="text" name="email"  placeholder="Email" required><br/><br/>
		   
		   <label for="password">Password: </label>
           <input  type="password" name="psw" placeholder="password" required><br/><br/>     
 

		  <input class="btn btn-primary" type="submit" name="create" value="Login"><br><br>
		  Don't have an account? <a href="register.php">  Register Here</a>
	      
		  </form>
</div>


</body>
</html>

<?php
     
	 if(isset($_POST['create']))
	 {
		 $email=$_POST["email"];
		 
		 
		 $pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		 if (!preg_match ($pattern, $email) )
		 {  
                  $ErrMsg = "Email is not valid.";  
                  echo $ErrMsg;
				  echo"<br>";
         }
		 else
		 {  
	              echo "Login suceessfully!!!!";
                  echo "Your valid email address is: " .$email; 
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