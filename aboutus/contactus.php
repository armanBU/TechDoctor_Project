<?php 
include 'header.html';
session_start();
if (isset($_SESSION['email'])) {
	header('location:../afterlogin/home.php');
}
?>
 <link rel="stylesheet" type="text/css" href="css/pranta.css">
 	<div class="box">
 		<center>
 		<h1><a class="c1" href="../home.php">Tech</a><span><a class="c2" href="../home.php">Doctor</a></span></h1></center>
 		<div class="d1">
 			<table class = "table stripe hover">
 				<thead>
 				<tr>
 					<th>Pranta Kumar Biswas</th>
 					<th>Sk. Ali Arman</th>
 					<th>Md. Ripon Hossen</th>
 				</tr>
				</thead>
 				<tr>
 					<td>pranta.cse4.bu@gmail.com</td>
 					<td>arman.cse4.bu@gmail.com</td>
 					<td>ripon.cse4.bu@gmail.com</td>
 				</tr>
 				<tr>
 					<td>4th Batch</td>
 					<td>4th Batch</td>
 					<td>4th Batch</td>
 				</tr>
 				<tr>
 					<td>University of Barisal</td>
 					<td>University of Barisal</td>
 					<td>University of Barisal</td>
 				</tr>
 			</table>
 		</div>
 		<br>
 		<p>Special Thanks to our honorable teacher for giving us the opportunity to create this project.</p>
 	</div>




 <?php 
include 'footer.html'
 ?>