<?php 
 include 'database/function.php';
  if (!isset($_SESSION['emaila'])) {
  	header("location:login.php");
  }
  if (isset($_SESSION['emaila'])) {
  }
?>
<?php 
$id = $_GET['id'];
$qtt = "DELETE FROM posts WHERE id=$id ";
$qr = mysqli_query($db,$qtt);
header('location:index.php');
 ?>