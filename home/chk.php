<?php 
include 'database/function.php';
if (isset($_SESSION['email'])) {
	header('location:../afterlogin/home.php');
}
 ?>