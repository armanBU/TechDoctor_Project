<?php 
include 'header.html';
include '../profile/database/function.php';
include '../profile/database/config.php';
session_start();
if (!isset($_SESSION['email'])) {
	header('location:../profile/login.php');
}
 ?>
 <link rel="stylesheet" type="text/css" href="css/askme.css">
<center style="background-color: white;">
	
<divstyle="background-color: white;">
	<a><img src="../images/ask.jpg" height="40%" width="20%"></a>
	<form action="" method="post">
		<p style="padding-right: 160px; font-size: 25px;">
			Select your problem topic
	  <select style="font-size: 20px;">
         <option value="computer">Computer</option>
         <option value="android">Android</option>
         <option value="programming">Programming</option>
         <option value="technical">Technical</option>
       </select>
   </p>
     
	<textarea  rows = "7" cols = "60" name = "question" placeholder="Give your problem discription here.."></textarea><br>
	<button class="askbutton">Submit</button>
	</form>
</div>

</center>
 <?php 
include 'footer.html';
 ?>