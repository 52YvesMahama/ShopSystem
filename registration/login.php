<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  <style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-style: italic; }
.style5 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
  </style>
</head>
<body>
  <div class="header">
  	<h2 class="style4">Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><span class="style3">Username</span></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label><span class="style2">Password</span></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	    <span class="style5"><a href="https://www.paypal.com/us/selfhelp/article/i-forgot-my-password.-how-do-i-reset-it-faq1933" class="style5 style2"><em>Forget Password</em> ?</a></span></div>
	<div align="center">
    </div>
	<p>
  		<span class="style1">Not yet a member</span>? <a href="register.php">Sign up</a>  	</p>
  </form>
</body>
</html>