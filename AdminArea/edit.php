<?php 
include 'header.html';
include 'database/function.php';
 ?>
<?php 
  if (!isset($_SESSION['emaila'])) {
  	header("location:login.php");
  	$l = "Login";
  	$lp = "login.php";
  }
    if (isset($_SESSION['emaila'])) {
  	$l = "Logout";
  	$lp = "logout.php";
  }

 $id = $_GET['id'];
 $q = "SELECT * FROM admin where '$id'=id";
 $res = mysqli_query($db,$q);
 $row = $res->fetch_assoc();
$email = $row['email'];
$id = $row['id'];

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
<form method="POST" enctype="multipart/form-data">
<div class="profile">
	<div class="details">
		
	</div>
	<h2 id="h2">ADMIN PANEL</h2>
	<table class="lld">
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
		</tr>
		
	</table>
	<div class="btnt">
		<button id="btn" class="btn" name="updateinf">Update</button>
		<button id="btn" class="btn" name="cncl">Cancel</button>
	</div>
	
</div>

</form>
</center>


 <?php 
include 'footer.html';
 ?>

<?php 
if (isset($_POST['cncl'])){
		header('location:admin.php');
	}
if (isset($_POST['updateinf'])) {
	if (isset($_SESSION['emaila'])) {
		$emailses = $_SESSION['emaila'];
	}
	if ($emailses===$email) {
		$id = $id;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$q = "UPDATE admin SET id=$id,email='$email',password='$password' WHERE id=$id ";
		$qr = mysqli_query($db,$q);
		session_destroy();
		header('location:login.php');		
	}
	else{
		$id = $id;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$q = "UPDATE admin SET id=$id,email='$email',password='$password' WHERE id=$id ";
		$qr = mysqli_query($db,$q);
		header('location:admin.php');
	}	
}
 ?>




