<?php
session_start();
echo"<script>alert('Logout Successfully!!!');window.location='homenew.php'</script>"; 
//header('location:homenew.php');

if(isset($_POST['logout'])){
 session_unset();
 session_destroy();
 
 


}


?>