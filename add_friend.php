<?php session_start(); include("include/header.php"); ?>
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>Find Friends<a href="logout.php">Logout</a></h2>
 	</div>
</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
<div class="main">	<?php
		$link=mysql_connect("localhost","root","");
		mysql_select_db("sms",$link);
		
		$id=$_SESSION['client']['uid'];
		$q="select * from register where r_id not in($id)";
		
		$res=mysql_query($q,$link);
		while($row=mysql_fetch_assoc($res))
		{
			
			$f=$_SESSION['client']['uid'];
			$req="select * from friend where (m_id='".$row['r_id']."' and f_id=$f) or (f_id='".$row['r_id'] ."'and m_id=$f)";
			$f_req=mysql_query($req,$link);
			$r_row=mysql_fetch_array($f_req);
			
			
			
			if($r_row['m_id']==$_SESSION['client']['uid'])
			{
				echo'<div class="add"><h1><a href="person.php?r_id='.$row['r_id'].'">'.$row['r_fnm'].'</a></h1><br>';
				echo'<div class="add"><a href=""><img src="img/'.$row['profile_pic'].'" height="200" width="300"><br><br>';
				echo'<div class="add"><a class="btn" href="add_friend_pro.php?id='.$row['r_id'].'">Cancel friend</a><br><br></div>';
				echo'<div class="add"><a class="btn" href="message.php?id='.$row['r_id'].'">Message</a><br><br></div>';
			}
			else if($r_row['m_id'] && $_SESSION['client']['uid'])
			{
				echo'<hr><div class="add"><h1><a href="person.php?r_id='.$row['r_id'].'">'.$row['r_fnm'].'</a></h1><br>';
				echo'<div class="add"><img src="img/'.$row['profile_pic'].'" height="200" width="300"><br><br>';
				echo'<div class="add"><a class="btn" href="accept_req_pro.php?accept='.$row['r_id'].'">Accept friend Request</a></div><br><br>';
				echo'<div class="add"><a class="btn" href="message.php?id='.$row['r_id'].'">Message</a><br><br></div>';
				
				
				echo'<div class="add"><a class="btn" href="remove_req_pro.php?delete='.$row['r_id'].'">Delete friend Request</a></div><br><br>';
			}
			else if($r_row['m_id']!=$_SESSION['client']['uid'])
			{
				echo'<hr><div class="add"><h1><a href="person.php?r_id='.$row['r_id'].'">'.$row['r_fnm'].'</a></h1><br>';
				echo'<div class="add"><img src="img/'.$row['profile_pic'].'" height="200" width="300"><br><br>';
				echo'<div class="add"><a class="btn" href="add_friend_pro.php?add='.$row['r_id'].'">Add friend</a></div><br><br>';
				echo'<div class="add"><a class="btn" href="message.php?id='.$row['r_id'].'">Message</a><br><br></div>';
			}
			
		}
	?>
</div>
</div>
<?php include("include/footer.php"); ?>