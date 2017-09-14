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
			<h1>Login</h1><br>
			<div class="login">
			<form action="login_pro.php" method="post">
				
				<?php
					if(!empty($_SESSION['error']))
						{				
							foreach($_SESSION['error'] as $er)
							{
								echo '<font color="red">'.$er.'</font></br>';
							}
							unset($_SESSION['error']);
						}
				?>
				
					<input type="text" placeholder="Username" class="txt" name="unm">
					<br><br>
					<input type="password" placeholder="Password" class="txt" name="pwd">
					<br><br>
					<table>
						<tr>
					  </tr>
					  </table>
					<br><input type="submit" value="Log In" class="btn">&nbsp;&nbsp;
						<br>
						<a href="#">You need Help ? I can't access my account.</a>
						<br><br>
						<a href="#">Forget Password ?</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>popular post</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
				<p class="top">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h4>tags</h4>
				<p>It is a long established fact that a reader will be distracted by the<big>readable</big> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal <big>blog</big> Many desktop publishing packages and web page editors now use Lorem.</p>
			</div>
			<div class="span1_of_4">
				<h4>a little about us</h4>
				<p class="btm">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				<p>It is a long established fact that a reader will be of a page when looking at its layout.</p>

			</div>
			<div class="span1_of_4">
				<h4>get in touch</h4>
				<p class="btm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
				<p class="btm1 pin">Gujarat,India</p>
				<p class="btm1 mail"><a href="http://www.gmail.com">jayp92@yahoo.in </a></p>
				<p class="call">08866698026</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!--end footer-->
<?php
	include("include/footer.php");
?>