<?php 
include 'config.php';

session_start();

$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['register'])) {

	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$password = mysqli_real_escape_string($db,$_POST['password']);

	$user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  
  	if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
   	 }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  	}
  	if (count($errors) == 0) {
  			$q = "INSERT INTO user(username,email,address,password) VALUES('$username','$email','$address','$password')";
		mysqli_query($db,$q);
		$_SESSION['email'] = $email;
  		$_SESSION['success'] = "You are now logged in.";
  		header('location:../../TechDoctor/home.php');
  }


	
	
}


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in.";
  	  header('location:../../TechDoctor/home.php');
  	}else {
  		array_push($errors, "Wrong Email/Phone combination");
  	}

}





 ?>