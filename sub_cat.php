<?php session_start();
	include("include/header.php");
	
?>

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
	<div class="top">
		 <?php session_start();
			
			if(isset($_SESSION['client']['status']))
			{
				echo '<h2>Welcome : '.$_SESSION['client']['unm'].' <a href="logout.php">Logout</a></h2>';
			}
		?>
 	</div>
</div>
</div>

<div class="sub">
	<?php
		include("include/config.php");
		$id=$_GET['id'];
		$pq="select * from subcat where scat_id=$id";
		
		$res=mysql_query($pq,$link);
		while($row=mysql_fetch_array($res))
		{
			echo "<br>".$row['s_nm']."<hr><br>";
		}
	?>
</div>
	
<!--profile En