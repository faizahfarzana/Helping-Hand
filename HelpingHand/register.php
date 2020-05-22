<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Helping Hand</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="title"><center><h1>Helping Hand</h1></center></div>
<div class="header"><h2>Register</h2></div>

<form method="post" action="register.php">
<?php include('errors.php');?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	
	<div class="input-group">
		<label>First Name</label>
		<input type="text" name="first_name">
	</div>
	
	<div class="input-group">
		<label>Last Name</label>
		<input type="text" name="last_name">
	</div>
	
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>
	
	<div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</div>
	<p> Already a member? <a href="login.php">Sign In</a></p>

</form>

</body>
</html>