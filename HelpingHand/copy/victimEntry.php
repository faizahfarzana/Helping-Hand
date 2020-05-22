<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Nirbhik19</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="title"><center><h1>Nirbhik19</h1></center></div>
<div class="header"><h2>Victim Info</h2></div>

<form method="post" action="victimEntry.php">
<?php include('errors.php');?>
	<div class="input-group">
		<label>Disaster ID</label>
		<input type="text" name="disasterid" value="<?php echo $disasterid; ?>">
	</div>
	
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	
	<div class="input-group">
		<label>Family Number</label>
		<input type="text" name="family_number" value="<?php echo $family_number; ?>">
	</div>
	
	<div class="input-group">
		<label>Birth Date</label>
		<input type="text" name="birth_date" value="<?php echo $birth_date; ?>">
	</div>
	
	<div class="input-group">
		<label>Age</label>
		<input type="text" name="age" value="<?php echo $age; ?>">
	</div>
	
	<div class="input-group">
		<label>Gender</label>
		<input type="text" name="gender" value="<?php echo $gender; ?>">
	</div>
	
	<div class="input-group">
		<label>Blood Group</label>
		<input type="text" name="bloodgroup" value="<?php echo $bloodgroup; ?>">
	</div>
	
	<div>
		<div class="input-group">
			<button type="submit" name="victimEntry" class="btn">Submit</button>
		</div>
	</div>

</form>

</body>
</html>