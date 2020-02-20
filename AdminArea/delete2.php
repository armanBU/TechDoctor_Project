<?php 
 include 'database/function.php';
  if (!isset($_SESSION['emaila'])) {
  	header("location:login.php");
  }
  if (isset($_SESSION['emaila'])) {
  }
?>
<?php 
include 'database/config.php';
session_start();
if (isset($_SESSION['emaila'])) {
	 $emailses = $_SESSION['emaila'];
}
$id = $_GET['id'];
$query = "SELECT * FROM admin WHERE id=$id";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);
$emailselect = $row['email'];

if ($emailses===$emailselect) {
	$query2 = "DELETE FROM admin WHERE email='$emailselect'";
	mysqli_query($db,$query2);
	session_destroy();
	header('location:../afterlogin/home.php');
}
else{
	$query2 = "DELETE FROM admin WHERE email='$emailselect'";
	mysqli_query($db,$query2);
	header('location:admin.php');
}

?>
