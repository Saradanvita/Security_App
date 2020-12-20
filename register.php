<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  background-image: url('register.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  font-size : 22px;
}
</style>
<body>
  <div class="header">
  	<u><b><h2 align="center">REGISTRATION FORM</h2><b></u>
  </div>
	
  <form method="post" action="db1.php" align="center">
  	<div class="input-group">
  	  <label>Username</label><br>
  	  <input type="text" name="username">  	
<br>
  	<div class="input-group">
  	  <label>Email</label><br>
  	  <input type="email" name="email">
  	</div>

  	<div class="input-group">
  	  <label>Password</label><br>
  	  <input type="password" name="password_1">
  	</div>

  	<div class="input-group">
  	  <label>Confirm password</label><br>
  	  <input type="password" name="password_2">
  	</div>
<br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</p>
</body>
</html>