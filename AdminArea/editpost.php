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
 $id = $_GET['id'];
 $q = "SELECT * FROM posts where '$id'=id";
 $res = mysqli_query($db,$q);
 $row = $res->fetch_assoc();
$id = $row['id'];
?>
<link rel="stylesheet" type="text/css" href="css/newpost.css">
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

<form method="POST">
<div class="notice">
	<br><br>

	<h1 id="h1">EDIT POST</h1>
	<?php include 'database/error.php'; ?>
	<br><br>
	<p><input type="text" name="heading" value="<?php echo $row['heading']; ?>" placeholder="Heading" Required></p>
	<textarea name="post" placeholder="Write Your post..." Required> <?php echo $row['post']; ?></textarea>
	<br>
	<br><br>
	<div class="btnt">
		<button id="btn" class="btn" name="updateinf">Update</button>
		<button id="btn" class="btn" name="cncl">Cancel</button>
	</div>
	<br><br>
</div>
</form>

<br><br><br>

</center>


 <?php 
include 'footer.html';

?>
<?php
if (isset($_POST['cncl'])){
		header('location:index.php');
	}
 else if (isset($_POST['updateinf'])) {
 	$id = $id;
	$heading = $_POST['heading'];
	$post = $_POST['post'];
	$password = $_POST['password'];
	$q = "UPDATE posts SET id=$id,heading='$heading',post='$post' WHERE id=$id ";
	$qr = mysqli_query($db,$q);
	header('location:index.php');
	
}


 ?>