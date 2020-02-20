<?php 
include 'header.html';
include 'database/config.php';
?>
 <?php  
 include 'database/function.php';
  if (!isset($_SESSION['emaila'])) {
  	header("location:login.php");
  	$l = "Login";
  	$lp = "login.php";
  }
  if (isset($_SESSION['emaila'])) {
  	$l = "Logout";
  	$lp = "logout.php";
  }
?>
<div class="navbar">
		<ul>
			<li><a href="index.php">POSTS</a></li>	
			<li><a href="answer.php">Give Answer</a></li>
			<li><a  href="members.php">Members</a></li>	
			<li><a id = "active" href="admin.php">ADMINS</a></li>	
			<li><a href = "<?php echo $lp; ?>"><?php echo $l; ?></a></li>	
		</ul>
		
	</div>
    </div>
    <div><table>
<tr><br><br><br><br><br></tr>
</table></div>





<center>
	<link rel="stylesheet" type="text/css" href="css/mem.css">



	<div class="bx1">
		<form method="POST">
		<br><br>
<div class="mem">
	<div class="mem1">
	<table id="fff">
		<tr>
			<td><h3>Email</h3></td>
			<td><h3>Password</h3></td>
			<td id="nww"><h3>Edit</h3></td>
			<td id="nww"><h3>Delete</h3></td>
			
		</tr>
	</table>
</div>







<div class="mem2 div2">
<?php 
		$qr1 = "SELECT * FROM admin";
		$qr2 = mysqli_query($db,$qr1);
 		while($row2 = mysqli_fetch_array($qr2)){
		?>
	<table id="fff2">
		<tr>
			<td><?php echo $row2['email'];?></td>
			<td><?php echo $row2['password'];?></td>
			<td id="nww"><a href="edit.php?id=<?php echo $row2['id']; ?>"><p id="dlt">Edit</p></a></td>
			<td id="nww"><a href="delete2.php?id=<?php echo $row2['id']; ?>"><p id="dlt">Delete</p></a></td>
		</tr>
	</table>
	<?php } ?>
</div>


</div>



</center>
<br><br>
</form>
</div>





<?php 
include 'footer.html'
?>