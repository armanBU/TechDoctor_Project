<?php 
include 'header.html';
session_start();
if (isset($_SESSION['email'])) {
	header('location:../afterlogin/home.php');
}
?>
 <link rel="stylesheet" type="text/css" href="css/pranta.css">
 <center>
 <div class="content clear">
 	<img src="images/a.jpg">
 	<p id="prt">SK <span>ALI</span> ARMAN</p>
 	<p>Designer of This Site</p>
 	<p>Dept. of Computer Science & Engineering</p>
 	<p>Session : 2016-2017</p>
 	<p>University of Barisal</p>
 	<p>Email : arman.cse4.bu@gmail.com</p>
 	<p>Phone : 017143387895</p>
 	<p>Home Town :: Satkhira</p>
 	<p>Age :: 21years</p>
 	<a id="angrypranta" href="https://web.facebook.com/skarman"><p id="angrypranta1">Facebook</p></a>

 </div>
</center>




 <?php 
include 'footer.html'
 ?>