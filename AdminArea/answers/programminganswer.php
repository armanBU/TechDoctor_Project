<?php 
include 'database/config.php';

 session_start();
 if (!isset($_SESSION['emaila'])) {
 	header('location:../home.php');
 }
if (isset($_SESSION['emaila'])) {
      
      $email= "";
      $email = $_SESSION['emaila']; 
 }

$id = $_GET['id'];
$q1 = "SELECT * FROM programming WHERE id='$id'";
$res3 = mysqli_query($db,$q1);
$row3 = $res3->fetch_assoc();
$answer2 = $row3['answer'];
$question = $row3['question'];
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
  	$email = $_SESSION['emaila'];
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TD</title>
    <link rel="shortcut icon" href="cover/favicon.png" /> 
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    
</head>
<body>
    <div class="head">
    	<div class="namelogo">
    		<a href="../../home.php">
        <img src="cover/images/a.png" id="logo_img" alt="TechDoctorSite" title="TechDoctorSite" />
        <h1 id="logo_text">Tech<span>Doctor</span></h1>
        </div></a>
		<div class="navbar">
		<ul>
			<li><a href="../index.php">Posts</a></li>	
			<li><a id = "active" href="../answer.php">Give Answer</a>
			</li>
			<li><a href="../members.php">Members</a>
			</li>	
			<li><a href="../admin.php">Admins</a></li>	
			<li><a href = "<?php echo $lp; ?>"><?php echo $l; ?></a></li>
			
			
		</ul>
		
	</div>
    </div>
    <div><table>
<tr><br><br><br><br><br></tr>
</table></div>





 <link rel="stylesheet" type="text/css" href="css/android.css">

 <center>
 	<div class="headtt">
 		<img src="../images/programming.png">
 		<h1>PROGRAMMING</h1>
 		<p>Popular Solutions</p>

 	</div>
</center>


<div class="c">
<form method="POST">

 <div class="qa">
 	<div class="headerh">
	<p id="question">QUESTION : <span><?php echo $question; ?></span></p>
</div>
<div class="answer">
	<p><?php echo $answer2; ?></p>
</div>
 	<br><br>
<div class="comment">
 <textarea type="text" name="comment" placeholder="Write Comment../আপনার উত্তর..." Required></textarea><br>
 <input id="but" type="submit" name="button2" value="Reply">
</div>
</div>

</form>

<center>
<table>
	<tr>
		<td>For More</td>
		<td><a href="android.php?page=1">Android</a></td>
		<td><a href="computer.php?page=1">Computer</a></td>
		<td><a href="graphics.php?page=1">Graphics</a></td>
		<td><a href="hardware.php?page=1">Hardware</a></td>
		<td><a href="technical.php?page=1">Technical</a></td>
	</tr>
</table>
</center>
</div>

<?php include 'footer.html'; ?>


<?php
if (isset($_POST['button2'])) {
$comment = mysqli_real_escape_string($db,$_POST['comment']);
	$answer3 = 'Admin :: '.$comment.'<br>'.$answer2; 
	$qre = "UPDATE programming SET answer = '$answer3' WHERE id = '$id' " ;
	mysqli_query($db,$qre);
	header('location:programming.php?page=1');
		
}

 ?>