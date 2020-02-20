<?php 
include 'header.html';
include 'database/config.php';
 ?>
 <?php  
 include 'database/function.php';
  if (!isset($_SESSION['email'])) {
  	header("location:login.php");
  	$l = "Login";
  	$lp = "login.php";
  }
  if (isset($_SESSION['email'])) {
  	$l = "Logout";
  	$lp = "logout.php";
  }
?>
<div class="navbar">
		<ul>
			<li><a href="index.php">POSTS</a></li>	
			<li><a href="answer.php">Give Answer</a></li>
			<li><a  id = "active" href="members.php">Members</a></li>	
			<li><a href="admin.php">ADMINS</a></li>	
			<li><a href = "<?php echo $lp; ?>"><?php echo $l; ?></a></li>	
		</ul>
		
	</div>
    </div>
    <div><table>
<tr><br><br><br><br><br></tr>
</table></div>
 <?php 
 $q = "SELECT * FROM admin";
 $res = mysqli_query($db,$q);
 $row = $res->fetch_assoc();
  ?>
 <center>
 	<link rel="stylesheet" type="text/css" href="css/profile.css">
 	<div class="box2">
 		<div class="box3">
 		<div class="p1">
 			<img src="images/logo.jpg">
 			<h2>User Profile</h2>
 			
 		</div>
 		<div class="p2">
 			<table>
 				<tr>
 					<td id="user"><img src="images/user.png"></td>
 					<td><h1><?php echo $row['username']; ?></h1></td>
 				</tr>
 				<tr>
 					<td><img src="images/maile.png"></td>
 					<td><p><?php echo $row['email']; ?></p></td>
 				</tr>
 				<tr>
 					<td><img src="images/address.png"></td>
 					<td><p><?php echo $row['address']; ?></p></td>
 				</tr>
 			</table>
 		
 		</div>
 	</div>
 </center>


 <?php 
include 'footer.html';
 ?>