<?php session_start();
	if($_POST)
	{
		 include("include/config.php");
		 $msg=$_POST['msgs'];
		 $message=$_GET['id'];
		
		$id=$_SESSION['client']['uid'];
		$date=date("Y-m-d h:i:s");
		$er="INSERT INTO  `message` (`m_from` ,`m_to` ,`message` ,`m_sent`)VALUES (  '$message',  '$id',  '$msg',  '$date')";
	
		mysql_query($er,$link);
		header("location:message.php?id=$message");
	}
	else
	{
		header("location:message.php?id=$message");
	}

 ?>