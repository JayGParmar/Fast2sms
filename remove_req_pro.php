<?php session_start();

		$link=mysql_connect("localhost","root","");
		mysql_select_db("sms",$link);

		$r_id=$_SESSION['client']['uid'];
	
		$delet=$_GET['delete'];


		if($delet!=NULL)
		{
			mysql_query("DELETE FROM friend WHERE  f_id=$r_id and m_id=$delet" );
			
		}

?>