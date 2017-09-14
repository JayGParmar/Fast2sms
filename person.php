<?php include("include/header.php");?>

<div id="person">
	
	<?php
		
		$link=mysql_connect("localhost","root","");
		mysql_select_db("sms",$link);
			
		$id=$_GET['r_id'];
		
		$q="select * from register
			where r_id=$id";
		
		$res=mysql_query($q,$link);
		while($row=mysql_fetch_array($res))
		{
			echo '<div class="add"><h1>'.$row['r_fnm'].' '.$row['r_unm'].'</h1><br>';
			echo '<img src="img/'.$row['profile_pic'].'" height="200" width="200"></div>';
		}
		
	?>
	
</div>
