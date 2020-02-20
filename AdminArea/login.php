<?php 
include 'header.html';
include 'database/function.php';
 ?>
  <?php  
  if (isset($_SESSION['emaila'])) {
  	header("location:index.php");
  }
?>
 <div class="navbar">
		<ul>
			<li><a href="index.php">POSTS</a></li>	
			<li><a href="answer.php">Give Answer</a></li>
			<li><a href="members.php">Members</a></li>
			<li><a href="admin.php">ADMINS</a></li>
			<li><a id = "active" href = "login.php">LOGIN</a></li>
		</ul>
		
	</div>
    </div>
    <div><table>
<tr><br><br><br><br><br></tr>
</table></div>
 <link rel="stylesheet" type="text/css" href="css/login.css">
<center>





<form method="POST">

	 <div class="box boxbg">
 		<img src="images/img-01.png">
 		<h1>Member Login</h1>
 		<div class="login">
 			<table>
 				<tr>
 					<td><img src="images/email.png"></td>
 					<td><input type="email" name="email" placeholder="Email" Required></td>
 				</tr>
 				<tr>
 					<td><img src="images/password.png"></td>
 					<td><input type="password" name="password" placeholder="Password" Required></td>
 				</tr>
 			</table>
 			<div class="btn"><a href="login.php"><input type="submit" value="Login" name="login"></div></a>	
 			<div class="reg">
 			<p><a href="">Forgot Account? Request New</a></p>
			<p><a href="../home.php">Do not have any account? Go Back</a></p>
			</div>
 	</div>
 	
 	</div>
</form>
</center>


 <?php 
include 'footer.html';
 ?>