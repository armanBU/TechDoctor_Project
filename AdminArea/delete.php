<?php 
include 'database/config.php';
 include 'database/function.php';
  if (!isset($_SESSION['emaila'])) {
  	header("location:login.php");
  }
  if (isset($_SESSION['emaila'])) {
  }
?>
<?php 
$id = $_GET['id'];
$q = "SELECT * FROM user where '$id'=id";
$res = mysqli_query($db,$q);
$row = $res->fetch_assoc();
$email = $row['email'];
$qtt = "DELETE FROM user WHERE id=$id ";
$q1 = "DELETE FROM android WHERE email='$email' ";
$q2 = "DELETE FROM computer WHERE email='$email' ";
$q3 = "DELETE FROM technical WHERE email='$email' ";
$q4 = "DELETE FROM programming WHERE email='$email' ";
mysqli_query($db,$q1);
mysqli_query($db,$q2);
mysqli_query($db,$q3);
mysqli_query($db,$q4);
mysqli_query($db,$qtt);
header('location:members.php');
 ?>
