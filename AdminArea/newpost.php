<?php 
include 'header.html'
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
  	$email = $_SESSION['emaila'];
  }
?>
<div class="navbar">
		<ul>
			<li><a id="active" href="index.php">POSTS</a></li>	
			<li><a href="answer.php">Give Answer</a></li>
			<li><a href="members.php">Members</a></li>
			<li><a href="admin.php">ADMINS</a></li>
			<li><a href = "<?php echo $lp; ?>"><?php echo $l; ?></a></li>	
		</ul>
		
	</div>
    </div>
    <div><table>
<tr><br><br><br><br><br></tr>
</table></div>
<center>
		<br><br><br>
<link rel="stylesheet" type="text/css" href="css/newpost.css">
<form method="POST" enctype="multipart/form-data">
<div class="notice">
	<br><br>

	<h1 id="h1">PUBLISH POST</h1>
	<?php include 'database/error.php'; ?>
	<br><br>
	<p><input type="text" name="heading" placeholder="Heading for the post..." Required></p>
	<textarea  name="textt" placeholder="Write Your post..." Required></textarea>
	<br>
	<br><br>
	<button class="btn" name="post">Post</button>
	<br><br>
</div>
</form>

<br><br><br>

</center>


 <?php 
include 'footer.html';


 if (isset($_POST['post'])) {

	$heading = $_POST['heading'];
	$textt = $_POST['textt'];

	$q = "INSERT INTO posts(heading,post) VALUES('$heading','$textt') ";
	$qr = mysqli_query($db,$q);
	header('location:index.php');
	
}


 ?>