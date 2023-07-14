<html>
<head>
    <title> Home page</title>
    
    		 <link rel="stylesheet" type="text/css" href="home1.css">	
</head>

<body>

  <div class ="container">
   
      <h1>Train Ticket Booking...</h1> 
	   <hr class="mb-3">
	  
 
  <nav>
  
  <div class="sh"> 
  <ul>
   <li><a href="login.php"> HOME</a></li><br>
	 <li><a href="login.php">Login</a></li><br>
	 <li><a href="register.php">Registration</a></li><br>
   <li><a href="register.php">Booking</a></li><br>
	 </ul>
   </div>
  </nav>
  </div>
 </body>
  </html>

  $im=imagecreate(200,200) or die("GD libriary not activated");
 imagecolorallocate($im,180,20,250);
 imagepng($im,"admin1.png");
 
 <img src="admin1.png"/>