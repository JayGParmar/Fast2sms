<?php session_start();
	
	$link=mysql_connect("localhost","root","");
	mysql_select_db("sms",$link);
	
	
	$a=$_SESSION['client']['id'];
	$f_id=$_REQUEST['add'];
	$d_id=$_REQUEST['id'];
	
	$qry=mysql_query("select * from friend where m_id=$a and f_id=$f_id");
	if($f_id!=null)
	{
		mysql_query("insert into friend
			(f_id,m_id)
			values($f_id,$a)");
	}
	else if($d_id!=null)
	{
		mysql_query("delete from friend
				where f_id=$d_id");
	}
	header("location:friends.php");
?>