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
<link rel="stylesheet" type="text/css" href="css/index.css">

<form method="POST">

    <br><br><br><br>
  <table id="fff">
    <tr>
      <td id ="mw"><h3>Posts</h3></td>
      <td id="nww"><h3>Edit</h3></td>
      <td id="nww"><h3>Delete</h3></td> 
    </tr>
  </table>

<div class="mem2 div2">
<?php 
    $qr1 = "SELECT * FROM posts";
    $qr2 = mysqli_query($db,$qr1);
    while($row2 = mysqli_fetch_array($qr2)){
    $text = $row2['heading'];
    ?>
  <table id="fff2">
    <tr>
      <td id="mne"><?php echo "$text";?></td>
      <td id="nww"><a href="editpost.php?id=<?php echo $row2['id']; ?>"><p id="dlt">Edit</p></a></td>
      <td id="nww"><a href="deletepost.php?id=<?php echo $row2['id']; ?>"><p id="dlt">Delete</p></a></td>
    </tr>
  </table>
  <?php } ?>
</div>



  <div class="btnt">
  <a  href="newpost.php"><p id="btn">NEW POST</p></a>
    </div>
    </form>
</center>
<center>
	<p>Login as <span id="blue"><?php echo $email; ?></span></p>
  <p>Go To Site <span id="blue"><a href="../afterlogin/home.php">Techdoctor</a></span></p>
</center>
<?php 
include 'footer.html'
?>
