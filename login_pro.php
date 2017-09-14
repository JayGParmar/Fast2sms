<?php session_start();
	
	if(!empty($_POST))
	{
		$_SESSION['error']=array();
		extract($_POST);
		
		if(empty($unm) || empty($pwd))
		{
			$_SESSION['error'][]="Please enter the user name or password";
			header("location:index.php");
		}
		else
		{
			include("include/config.php");
			
			$q="select * from register 
				where r_unm='".mysql_real_escape_string($unm)."' and r_pwd='".mysql_real_escape_string($pwd)."'";
				
			$res=mysql_query($q,$link);
			$row=mysql_fetch_assoc($res);
			
			if(!empty($row))
			{
				$_SESSION['client']['unm']=$row['r_fnm'];
				$_SESSION['client']['uid']=$row['r_id'];
				$_SESSION['client']['status']=true;
				
				header("location:home.php");
			}
			else
			{
				$_SESSION['error'][]="Wrong User Name or Password";
				//header("location:index.php");
			}
		}
	}
	else
	{
		//header("location:index.php");
	}
	
	echo mysql_error();
?>