<?php 
include 'header.html';
 ?>
<?php
	$mydb=mysqli_connect('localhost','root','');
	mysqli_select_db($mydb,'techdoctor');
	$output='';
	session_start();
	if (isset($_SESSION['email'])) {
	header('location:../afterlogin/home.php');
}
	if(isset($_POST['search'])){
	$searchq=$_POST['search'];
	$_SESSION['src']=$searchq;
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query=mysqli_query($mydb,"SELECT * FROM computer WHERE question LIKE '%$searchq%'") ;
	$count=mysqli_num_rows($query);
	if($count==0){
		$output='no data to search';
}
    else{
		while($row=mysqli_fetch_array($query)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$output .='<div>'.'Question:'.$question.' <br>'.'Answer:'.$answer. '</div>';
	}
   }
}

?>
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<center>
<div class="heading">
	<form action="pagination2.php?page=1" method="post">
		<h1><a class="c1" href="../home.php">Tech</a><span><a class="c2" href="../home.php">Doctor</a></span></h1>
		<div class="src">
			<h1>Search by Keyword</h1>
			<p>To find the correct solution, you need to search valid keyword</p>
		</div>

		
		<input type="search" name="search" placeholder="Search Here" Required><br>
		<button id="but" type="submit">TechDoctor Search</button>
	</form>

	<?php 
		print("$output");
	?>
</div>

</center>
 <?php 
include 'footer.html';
 ?>