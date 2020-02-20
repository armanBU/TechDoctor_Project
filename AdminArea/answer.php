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
  }
?>
<div class="navbar">
		<ul>
			<li><a href="index.php">POSTS</a></li>	
			<li><a id = "active" href="answer.php">Give Answer</a></li>
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
<div class="abol">
  


  <div class="division">
  <h2>Select a Topic to answer Questions</h2>


    <a href="answers/android.php?page=1">
    <div class="content"><p>ANDROID</p>
    <img src="answers/images/android.png">
    </div></a>

    <a href="answers/computer.php?page=1">
    <div class="content"><p>COMPUTER</p>
    <img src="answers/images/Computer.png">
    </div></a>

    <a href="answers/programming.php?page=1">
    <div class="content"><p>PROGRAMMING</p>
    <img src="answers/images/programming.png">
    </div></a>

    <a href="answers/technical.php?page=1">
    <div class="content"><p>TECHNICAL</p>
    <img src="answers/images/technical.png">
    </div></a>

    <a href="answers/graphics.php?page=1">
    <div class="content"><p>GRAPHICS</p>
    <img src="answers/images/graphics.png">
    </div></a>


    <a href="answers/hardware.php?page=1">
    <div class="content"><p>HARDWARE</p>
    <img src="answers/images/hardware.png">
    </div></a>


  </div>
</div>
</center>



<?php 
include 'footer.html'
?>