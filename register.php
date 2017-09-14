<?php session_start();
	include("include/header.php");
?>

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>welcome to our Fast2SMS</h2>
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
	<div class="main">
		<div class="details">
			<h4>Please Regester Yourself <br><br></h4><h1>Regestration</h1>
			<br>
			<div class="login">
				
				<?php 
						
						if(isset($_SESSION['done']))
						{
							echo '<font color="green">'.$_SESSION['done'].'</font>';								$_SESSION['done'].'</font><br>';
							
							unset($_SESSION['done']);
						}
						else if(!empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<font color="red">'.$er.'</font><br/>';
							}
							unset($_SESSION['error']);
						}
				?>
				
				<form action="register_pro.php" method="post">
	
				<input type="text" name="fnm" class="txt1" placeholder="Full Name"><br><br>
				
				<input type="text" name="unm" class="txt1" placeholder="User Name"><br><br>
				
				<input type="password" name="pwd" class="txt1" placeholder="Password"><br><br>
				
				<input type="password" name="cpwd" class="txt1" placeholder="Confirm Password"><br><br>
				
				<input type="text" name="email" class="txt1"  placeholder="Email Address"><br><br>
				
				<input type="text" name="cno" class="txt1" placeholder="Contact Number"><br><br>

				<input type="submit" value="I  Accept & Submit" class="btn">
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	include("include/footer.php");
?>