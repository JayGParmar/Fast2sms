<?php session_start();
	
	if(! empty($_POST))
	{
		$_SESSION['error']=array();
		extract($_POST);
		
		if(empty($words))
		{
			$_SESSION['error'][]="Please enter the status";
			header("location:home.php");
		}
		else
		{
			$id=$_SESSION['client']['uid'];
			include("include/config.php");
			
			$q="insert into register
				(status,r_id)
				values('$words',$id)";
				
			mysql_query($q,$link);
			
			$_SESSION['done']="Done ! Status Added Successfully";
			header("location:home.php");
		}
	}
	else
	{
		header("location:home.php");
	}
?>