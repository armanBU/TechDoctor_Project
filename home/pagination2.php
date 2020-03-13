<?php 
include 'header.html';
session_start();
if (isset($_SESSION['email'])) {
	header('location:../afterlogin/home.php');
}
 ?>
<?php
	$mydb=mysqli_connect('localhost','root','');
	mysqli_select_db($mydb,'techdoctor');
	$output='';
	$ck='';
	if(empty($search_display)){
		$search_display='';
	}
	if(isset($_POST['search'])){
	$searchq=$_POST['search'];

		if(!empty($searchq)){
			$search_display=$searchq;
			$_SESSION['src']=$searchq; 
		}
		 $s=$searchq;
	
	for($i=0;$i<strlen($s);$i++){
		if(($s[$i]>='a'&&$s[$i]<='z')||($s[$i]>='A'&&$s[$i]<='Z')||($s[$i]>='0'&&$s[$i]<='9')){
					
		}
		else{
			$s[$i]='0';
		}
	}
	$searchq=$s;
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query1=mysqli_query($mydb,"SELECT * FROM android WHERE question LIKE '%$searchq%'") ;
	$query2=mysqli_query($mydb,"SELECT * FROM computer WHERE question LIKE '%$searchq%'") ;
	$query3=mysqli_query($mydb,"SELECT * FROM programming WHERE question LIKE '%$searchq%'") ;
	$query4=mysqli_query($mydb,"SELECT * FROM technical WHERE question LIKE '%$searchq%'") ;
	$query5=mysqli_query($mydb,"SELECT * FROM graphics WHERE question LIKE '%$searchq%'") ;
	$query6=mysqli_query($mydb,"SELECT * FROM hardware WHERE question LIKE '%$searchq%'") ;
	$temp=mysqli_query($mydb,"SELECT * FROM temp") ;
	$tmp_cnt=mysqli_num_rows($temp);
	$count1=mysqli_num_rows($query1);
	$count2=mysqli_num_rows($query2);
	$count3=mysqli_num_rows($query3);
	$count4=mysqli_num_rows($query4);
	$count5=mysqli_num_rows($query5);
	$count6=mysqli_num_rows($query6);
	$qr1 = "SELECT * FROM temp";
	$cnt=1;
    $qr2 = mysqli_query($mydb,$qr1);
         while($row2 = mysqli_fetch_array($qr2)){
             $id = $row2['id'];
                $qtt = "DELETE FROM temp WHERE id=$id ";
                  mysqli_query($mydb,$qtt);
                }
	
		while($row=mysqli_fetch_array($query1)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql);
		
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';
		$output.='<br>';
	}
	while($row=mysqli_fetch_array($query2)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query3)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query4)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query5)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	while($row=mysqli_fetch_array($query6)){
		$question=$row['question'];
		$answer=$row['answer'];
		$id=$row['id'];
		$ck=1;
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
		$output .='<div>'.'Question: '.$question.' <br>'.'Answer: '.$answer.  '</div>';$output.='<br>';
	}
	if($ck!=1){
		$question="                   No data found.Please check your Spelling.";
		$answer=" ";
		$sql1="INSERT INTO temp (question,answer) VALUES ('$question','$answer')";
		mysqli_query($mydb,$sql1);
	}
   }

?>


	<link rel="stylesheet" type="text/css" href="css/search2.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<div class="box">
		<a href="../home.php"><h1>TechDoctor</h1></a>
		<div class="searchbar">
	<form action="pagination2.php?page=1&search_display=<?php echo $_POST['search2'];?>" method="post">
		<input type="search" name="search" placeholder="Search Here" value="<?php
		
		if (isset($_SESSION['src'])) {
			echo $_SESSION['src']; 
			
			}
			else{echo $search_display;
			}?>" Required>
		<span><button id="but" type="submit" name="searchbtn">Search</button></span>
	</form>
</div>




<div class="srcresult">
	 <?php   
    $mydb=mysqli_connect('localhost','root','');
    mysqli_select_db($mydb,'techdoctor');
    $page=$_GET["page"];
    if($page=="" || $page=="1"){
        $page1=0;$page=1;
    }
    else{
        $page1=($page*5)-5;
    }
    $res=mysqli_query($mydb,"SELECT * FROM temp limit $page1,5") ;
 	$cnt=$page1+1;
    while($row=mysqli_fetch_array($res)){

?>

        <p><?php echo $cnt.". ".$row['question']."<br>".$row['answer'].'<br>'; ?></p>
<?php

        $cnt=$cnt+1;
    }
$res1=mysqli_query($mydb,"SELECT * FROM temp") ;
$count=mysqli_num_rows($res1);
$a=$count/5;
$a=ceil($a);
   echo "<br>";
   ?>

</div>

<!--PAGINATION-->
<div class="center">
	<div class="pagination">

		<a href="pagination2.php?page=<?php if($_GET['page']>1){echo ($_GET['page']-1);}else {echo '1';
					
	   			}  ?>">&laquo;</a>
		<?php

  			for($i=1;$i<=$a;$i++){
        	if($page==$i){
        ?>
        <a class="active" href="pagination2.php?page=<?php echo $i;?>"><p><?php echo $i." "; ?></p></a>
        <?php
        }
        else{
        ?>
        <a href="pagination2.php?page=<?php echo $i;?>" ><?php echo $i." "; 
        ?></a>
        <?php
    }
   }
   
   ?>
   	<a href="pagination2.php?page=<?php if($_GET['page']<$a){echo ($_GET['page']+1);}else {echo $a;}
   		
   		?>">&raquo;</a>
   		
	</div>
</div>


</div>



 <?php 
include 'footer.html';
 ?>