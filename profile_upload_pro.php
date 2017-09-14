<?php session_start();
	
	extract($_POST);
	$_SESSION['error']=array();
	$ext=strtoupper(substr($_FILES['img']['name'],-4));
	
	if(empty($_FILES['img']['name']))
	{
		$_SESSION['error']['fnm']="Please select Image";
	}
	else if(!($ext==".JPG"
			|| $ext==".PNG"
			|| $ext==".GIF"
			|| $ext=="JPEG"
			|| $ext==".BMP"))
	{
		$_SESSION['error']['fnm']="Wrong type of image";
	}
	else if(file_exists("img/".$_FILES['img']['name']))
	{
		$_SESSION['error']['fnm']="Image Already available";
	}
	if(!empty($_SESSION['error']))
	{
		header("location:home.php");
	}
	else{
		
		$fnm=time()."_".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'],"img/".$fnm);
		
		$link=mysql_connect("localhost","root","");
		mysql_select_db("sms",$link);
		
		$id=$_SESSION['client']['uid'];
		$q="update register
			set profile_pic='$fnm' where r_id=$id" ;
			
		mysql_query($q,$link);
			
		header("location:home.php");
	}
?>