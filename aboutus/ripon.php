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
 	<img src="images/r.jpg">
 	<p id="prt">Md. <span>Ripon</span> Hossen</p>
 	<p>Designer of This Site</p>
 	<p>Dept. of Computer Science & Engineering</p>
 	<p>Session : 2016-2017</p>
 	<p>University of Barisal</p>
 	<p>Email : ripon.cse4.bu@gmail.com</p>
 	<p>Phone : 01740711410</p>
 	<p>Home Town :: Pabna</p>
 	<p>Age :: 21years</p>
 	<a id="angrypranta" href="https://web.facebook.com/ripon123"><p id="angrypranta1">Facebook</p></a>

 </div>
</center>




 <?php 
include 'footer.html'
 ?>