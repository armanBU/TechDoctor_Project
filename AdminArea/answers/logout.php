<?php 
session_start();
if (isset($_SESSION['emaila'])) {
  session_destroy();
  header('location:../../home.php');
}
 ?>
