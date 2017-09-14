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
<!-- start main -->
<div id="main1">
	<div class="details1">
		<h2>Category</h2>
			<ul>
				<?php
						include("include/config.php");
						
						$cat_q="select * from category order by cat_nm";
						$cat_res=mysql_query($cat_q,$link);
						
						while($cat_row=mysql_fetch_assoc($cat_res))
						{
							echo '<li><a href="sub_cat.php?id='.$cat_row['cat_id'].'">'.$cat_row['cat_nm'].'</a></li>';
						}
				?>
			</ul>
	</div>
</div>
<!--profile start-->
<div id="profile">
	<div class="pro_detail">
		<?php
			if(isset($_SESSION['client']['status']))
			{
				echo '<h2>'.$_SESSION['client']['unm'].'</h2>';
			}
		?>
	</div>
</div>

<div id="profile">
	<div class="pro_detail">
		<?php
		
			$link=mysql_connect("localhost","root","");
			mysql_select_db("sms",$link);
			
			$id=$_SESSION['client']['uid'];
			
			$q="select * from register
				where r_id=$id";
			
			$res=mysql_query($q,$link);
			while($row=mysql_fetch_assoc($res))
			{
				echo '<img src="img/'.$row['profile_pic'].'" height="200" width="200">';
			}
		
		?>
		
		<form action="profile_upload_pro.php" method="post" enctype="multipart/form-data">
			<input type="file" name="img" />
			<br /><br />

			<input type="submit" value="Upload" />
		</form><hr/>
		<div class="profile_status">
			<h1>Status</h1>
			<?php
				if(isset($_SESSION['done']))
				{
					echo '<font color="green">'.$_SESSION['done'].'</font>';									'</strong></p></div>';
						
					unset($_SESSION['done']);
				}
				else if(!empty($_SESSION['error']))
				{
					foreach($_SESSION['error'] as $er)
					{
						echo '<font color="red">'.$er.'</font>';
					}
					unset($_SESSION['error']);
				}
			?>
				
					<?php
						
						include("include/config.php");
						
						$id=$_SESSION['client']['uid'];
						
						$sta_q="select * from register
						where r_id=$id";
						
						$sta_res=mysql_query($sta_q,$link);
						
						
						while($sta_row=mysql_fetch_assoc($sta_res))
						{
							echo '<h3>'.$sta_row['status'].'</h3><a href="edit_status.php?id='.$sta_row['r_id'].'">Edit</a>';
						}
						
					?>
			
		</div>
	</div>
</div>	
<!--profile En