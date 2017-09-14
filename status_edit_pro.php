<?php session_start();

	if(!empty($_POST))
	{
		extract($_POST);
		$_SESSION['errorr']=array();
		
		if(empty($spell))
		{
			$_SESSION['errorr'][]="Please Edit Status Here";
			header("location:edit_status.php?id=$id");
		}
		else
		{
			include("include/config.php");
	
			$q="update register
				set status='$spell'
				where r_id=$id";
				
			mysql_query($q,$link);

			header("location:home.php");
		}
	}
	else
	{
		header("location:home.php");
	}
?>