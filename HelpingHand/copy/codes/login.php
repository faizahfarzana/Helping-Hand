<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Nirbhik19</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="title"><center><h1>Nirbhik19</h1></center></div>
<div class="header"> <h2>Log In</h2></div>
<form method="post" action="login.php">
	<div class="input-group">
	<label>Username</label>
	<input type="text" name="username">
	</div>
	
	<div class="input-group">
	<label>Password</label>
	<input type="password" name="password_1">
	</div>

	<div class="input-group"> <button type="submit" name="login" class="btn">Log In</button> </div>  
	<p>Not a member Yet? <a href="register.php">Sign up</a> </p>

</form>

</body>
</html>