<?php 
include 'database/function.php';
  	session_destroy();
  	unset($_SESSION['emaila']);
  	header("location: ../afterlogin/home.php");

?>