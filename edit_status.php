<?php include("include/header.php");
	include("include/config.php");
	
	$id=$_GET['id'];
	
	$q="select * from register
		where r_id=$id";
		
	$res=mysql_query($q,$link);
	
	$row=mysql_fetch_assoc($res);

?>
<div id="status">
	
	<form action="status_edit_pro.php" method="post">
			
		<h4>Update Status</h4><br>
		<?php
				if(isset($_SESSION['done']))
				{
					echo '<font color="green">'.$_SESSION['done'].'</font>';									'</strong></p></div>';
						
					unset($_SESSION['done']);
				}
				else if(!empty($_SESSION['errorr']))
				{
					foreach($_SESSION['errorr'] as $er)
					{
						echo '<font color="red">'.$er.'</font>';
					}
					unset($_SESSION['errorr']);
				}
		?>
		<input type="text" name="spell" class="text" value="<?php echo $row['status']; ?>" />
		<input type="hidden" name="id" class="text" value="<?php echo $row['r_id']; ?>" /><br><br>
		<input type="submit" value="Update" class="btn1">
	</form>
</div>