<?php 
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
      <a href="../../home.php">
    	<div class="namelogo">
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
<?php 	$page=$_GET["page"];
    if($page=="" || $page=="1"){
        $page1=0;$page=1;
    }
    else{
        $page1=($page*5)-5;
    } ?>

<div class="c">
<?php 
 if (!isset($_SESSION['emaila'])) {
	header('location:../home.php');
}
 if (isset($_SESSION['emaila'])) {
      
      $email= "";
      $email = $_SESSION['emaila']; 
 }
 $q = "SELECT * FROM programming";
 $res = mysqli_query($db,$q);

while($row = mysqli_fetch_array($res)){
	$email = $row['email'];
	$question = $row['question'];
	$answer = $row['answer'];
	$answer = substr($answer, 0,100);
	$answer = $answer."<br>....................";
	$qr = "SELECT * FROM user WHERE '$email'=email";
	$res2 = mysqli_query($db,$qr);
 	$row2 = $res2->fetch_assoc();
 	$name = $row2['username'];
?>





 <div class="qa">
 	<div class="headerh">
 		<p id="question">প্রশ্ন/QUESTION : <span><?php echo $question; ?></span></p>
 	</div>
 	<form method="POST" >
 	<div class="d1">
 		<img src="../images/programming.png">
	<p id="userm"><?php echo $name; ?><span>'s Query</span></p>
 	</div>
 	<div class="d2">

 	<p id="ans">উত্তর/ANS : <span><?php echo $answer; ?><a href="programminganswer.php?id=<?php echo $row['id']; ?>">more.</a></span></p>

 	<div class="button"><a href="programminganswer.php?id=<?php echo $row['id']; ?>"><p>View All</p></a></div>
 	</div>		
 	</form>
 </div>

<?php } ?>


<!--PAGINATION-->
<?php 
$res1=mysqli_query($db,"SELECT * FROM programming") ;
  $count=mysqli_num_rows($res1);
$a=$count/5;
$a=ceil($a);
   echo "<br>";
   ?>
<div class="center">
  <div class="pagination">
  <a href="programming.php?page=<?php if($_GET['page']>1){echo ($_GET['page']-1);}else {echo "1";}?>">&laquo;</a>
    <?php
   for($i=1;$i<=$a;$i++){
        if($page==$i){
        	?>
  <a class="active" href="programming.php?page=<?php echo $i;?>"><p><?php echo $i." "; ?></p></a>
        	<?php
        }
        else{
        ?>

        <a href="programming.php?page=<?php echo $i;?>" ><?php echo $i." "; ?></a>
          <?php
    }
   }
   ?>
  <a href="programming.php?page=<?php if($_GET['page']<$a){echo ($_GET['page']+1);}else {echo $a;}?>">&raquo;</a>
  </div>
</div>

<!--END-->



<center>
<table style="margin-top:20px;">
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
 <?php 
include 'footer.html';
 ?>