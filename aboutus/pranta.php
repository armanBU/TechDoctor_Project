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
 	<img src="images/pranta.jpg">
 	<p id="prt">PRANTA <span>KUMAR</span> BISWAS</p>
 	<p>Designer of This Site</p>
 	<p>Dept. of Computer Science & Engineering</p>
 	<p>Session : 2016-2017</p>
 	<p>University of Barisal</p>
 	<p>Email : pranta.cse4.bu@gmail.com</p>
 	<p>Phone : 01716981323</p>
 	<p>Home Town :: Magura</p>
 	<p>Age :: 20years</p>
 	<a id="angrypranta" href="https://web.facebook.com/angrypranta"><p id="angrypranta1">Facebook</p></a>

 </div>
</center>




 <?php 
include 'footer.html'
 ?>