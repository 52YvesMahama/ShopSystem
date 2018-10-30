<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  <style type="text/css">
<!--
.style1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style3 {font-family: "Courier New", Courier, monospace}
.style7 {font-style: italic; font-family: Geneva, Arial, Helvetica, sans-serif;}
-->
  </style>
</head>
<body>
  <div class="header">
  	<h2 class="style7">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label><span class="style1">Username</span></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label><span class="style1">Email</span></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label><span class="style1">Password</span></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label><span class="style1">Confirm password</span></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>	  <span class="style3">Already a member</span>? <a href="login.php">Sign in</a>  	</p>
  </form>
</body>
</html>