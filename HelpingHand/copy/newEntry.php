<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Nirbhik19</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="title"><center><h1>Nirbhik19</h1></center></div>
<div class="header"><h2>New Crisis</h2></div>

<form method="post" action="newEntry.php">
<?php include('errors.php');?>
	<div class="input-group">
		<label>Company ID</label>
		<input type="text" name="companyid" value="<?php echo $companyid; ?>">
	</div>
	
	<div class="input-group">
		<label>Crisis Category</label>
		<input type="text" name="category" value="<?php echo $category; ?>">
	</div>
	
	<div class="input-group">
		<label>Date</label>
		<input type="text" name="disaster_date" value="<?php echo $disaster_date; ?>">
	</div>
	
	<div class="input-group">
		<label>Death Toll</label>
		<input type="text" name="killed_people" value="<?php echo $killed_people; ?>">
	</div>
	
	<div class="input-group">
		<label>Injured</label>
		<input type="text" name="affected_people" value="<?php echo $affected_people; ?>">
	</div>
	
	<div class="input-group">
		<label>Zone</label>
		<input type="text" name="affected_zone" value="<?php echo $affected_zone; ?>">
	</div>
	
	<div>
		<div class="input-group">
			<button type="submit" name="newEntry" class="btn">Submit</button>
		</div>
	</div>

</form>

</body>
</html>