<?php session_start();
	
	if(!empty($_POST))
	{
		$_SESSION['error']=array();
		extract($_POST);
		
		if(empty($fnm))
		{
			$_SESSION['error']['fnm']="Please Enter the Full Name";
		}
		if(empty($unm))
		{
			$_SESSION['error']['unm']="Please Enter the User Name";
		}
		if(empty($pwd) || empty($cpwd))
		{
			$_SESSION['error']['pwd']="Please Enter the Password";
		}
		else if($pwd!=$cpwd)
		{
			$_SESSION['error']['pwd']="Password Not Matches";
		}
		else if(strlen($pwd)<6)
		{
			$_SESSION['error']['pwd']="Please Enter minimum 6 digits";
		}
		if(empty($email))
		{
			$_SESSION['error']['email']="Please Enter the Email";
		}
		if(empty($cno))
		{
			$_SESSION['error']['cno']="Please Enter the Contact Number";
		}
		else if(! is_numeric($cno))
		{
			$_SESSION['error']['cno']="Please Enter Numeric Contact Number";
		}
		else if(strlen($cno)!=10)
		{
			$_SESSION['error']['cno']="Please Enter 10 digits";
		}
		if(!empty($_SESSION['error']))
		{
			header("location:register.php");
		}
		else
		{
			include("include/config.php");
			
			$q="insert into register
				(r_fnm,r_unm,r_pwd,r_email,r_cno)
				values('$fnm','$unm','$pwd','$email','$cno')";
			
			$res=mysql_query($q,$link);
			
			$_SESSION['done']="Done ! Register Successfully";
			
			header("location:register.php");
		}
	}
	else
	{
		header("location:register.php");
	}
?>