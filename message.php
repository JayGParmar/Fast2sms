<?php session_start(); include("include/header.php"); ?>
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>Type Message<a href="logout.php">Logout</a></h2>
 	</div>
</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
<div class="main">
	<div class="msg">
		<?php
			include("include/config.php");
			$id=$_SESSION['client']['uid'];
			$message=$_GET['id'];
			
			$em="select * from message where m_from=$id and m_to=$message";
			$em_res=mysql_query($em,$link);
			if($em_res>0)
				{
			
		    while($em_row=mysql_fetch_array($em_res))
			{
				
				$e="select * from register where r_id=$message";
				$e_res=mysql_query($e,$link);
				$e_row=mysql_fetch_array($e_res);
				echo '<br/>'.$e_row['r_fnm'].' '.$e_row['r_unm'].'<br/>';
				echo $em_row['message'];
			}
			}
			$emv="select * from message where m_to=$id and m_from=$message";
			$emv_res=mysql_query($emv,$link);
			if($emv_res>0)
				{
			
		    while($emv_row=mysql_fetch_array($emv_res))
			{
				
				$ev="select * from register where r_id=$id";
				$ev_res=mysql_query($ev,$link);
				$ev_row=mysql_fetch_array($ev_res);
				echo '<br/><br/>'.$ev_row['r_fnm'].' '.$ev_row['r_unm'].'<br/>';
				echo $emv_row['message'];
			}
			}
		?>
		<div class="send">
		
		<form action="msg_fnd.php?id=<?php echo $message; ?>" method="post">
			<textarea cols="100" rows="10" name="msgs" placeholder="Type a message"></textarea>
			<input type="submit" name="send" value="send" class="btn">
		</form>
		</div>
	</div>
</div>
</div>
<?php include("include/footer.php"); ?>