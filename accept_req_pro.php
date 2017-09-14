<?php session_start();

		$link=mysql_connect("localhost","root","");
		mysql_select_db("sms",$link);
		
		$r_id=$_SESSION['client']['uid'];
		$m_of=$_REQUEST['id'];
		$accept_friend=$_REQUEST['accept'];
		$qry=mysql_query("select * from friend where m_id=$r_id and f_id=$accept_friend");
		$row=@mysql_num_rows($qry);
		if($accept_friend!=$r_id)
		{
			
			mysql_query("insert into accept_friend(f_of,m_of)values('$r_id','$accept_friend')");
			mysql_query("insert into accept_friend(f_of,m_of)values('$accept_friend','$r_id')");
			
			mysql_query("DELETE FROM friend WHERE  f_id=$r_id and m_id=$accept_friend");
			
				
		}			
?>
