<?php
//SETTING DATABASE CONNECTION

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pkpoultry';

$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error());


function checkTimeout($timeout = 600) {
  if($timeout !== 0 && isset($_SESSION['last_time']) && time() - $_SESSION['last_time'] > $timeout)  {

  			echo"<script>alert('15 Minutes over!');</script>";
		    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
		    $_SESSION['logged_in'] = false;
		      $_SESSION['message'] = "User Time Out";
		      header("location: inc/error.php"); 
		    exit;
    
  		}
  
  $_SESSION['last_time'] = time();
}


?>