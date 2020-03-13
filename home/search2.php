<?php 
include 'header.html';
 ?>
<?php
	$mydb=mysqli_connect('localhost','root','');
	mysqli_select_db($mydb,'techdoctor');
	$output='';
	$ck='';
	$search_display='';
	if(isset($_POST['search'])){
	$searchq=$_POST['search'];
	$search_display=$_POST['search'];
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query1=mysqli_query($mydb,"SELECT * FROM android WHERE question LIKE '%$searchq%'") ;
	$query2=mysqli_query($mydb,"SELECT * FROM computer WHERE question LIKE '%$searchq%'") ;
	$query3=mysqli_query($mydb,"SELECT * FROM programming WHERE question LIKE '%$searchq%'") ;
	$query4=mysqli_query($mydb,"SELECT * FROM technical WHERE question LIKE '%$searchq%'") ;
	$query5=mysqli_query($mydb,"SELECT * FROM graphics WHERE question LIKE '%$searchq%'") ;
	$query6=mysqli_query($mydb,"SELECT * FROM hardware WHERE question LIKE '%$searchq%'") ;
	$count1=mysqli_num_rows($query1);
	$count2=mysqli_num_rows($query2);
	$count3=mysqli_num_rows($query3);
	$count4=mysqli_num_rows($query4);
	$count5=mysqli_num_rows($query5);
	$count6=mysqli_num_rows($query6);
		while($row=mysqli_fetch_array($query1)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';
		$output.='<br>';
	}
	while($row=mysqli_fetch_array($query2)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query3)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query4)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query5)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query6)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
   }

?>


 <br>
 <center>

	<link rel="stylesheet" type="text/css" href="css/search2.css">
<div class="aaa">
	<form action="search2.php" method="post">
 	<p>

	<input id="abc" type="text" name="search" Required value="<?php echo $search_display ?>">
		<input id="abc2"  type="submit" name="" value="Search">

	</p>
	
</form>
<div style="text-align:left;padding-left: 30px;padding-bottom: 30px;">
     <?php 
		print("$output");
	 ?>
	 <?php 
		if($ck!=1){
			echo 'No match found';
		}
	 ?>
	</div>
</div>

</center>

 <?php 
include 'footer.html';
 ?>