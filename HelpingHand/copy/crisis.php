<?php include('server.php'); ?>
<?php session_start(); ?>

<li class='active' style='float:right;'>
 
 <?php 
  if(isset($_SESSION['logged'])) { 
      echo $_SESSION['username'];
      echo '<a href="logout.php"><span>Log Out</span></a></li>';
   }
  else echo '<a href="http://localhost/nirbhikbaby/login.php"><span>Log In</span></a></li>';
?>
  
<!DOCTYPE html>
 
<html>
<head>
	<title>Nirbhik19</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="title">
	<center><h1>Nirbhik19</h1></center>
</div>

<div class="taskmenu">
	<ul>
	<li><a href="http://localhost/nirbhikbaby/index2.php">Home</a></li>
	<li><a href="http://localhost/nirbhikbaby/crisis.php">Crisis</a></li>
	<li><a href="http://localhost/nirbhikbaby/team.php">Team</a></li>
	</ul>
</div>

<div class="taskmenu">
    <li><a href="Crisis/wholeD.php">Overall Crisis Info</a></li>
	<li><a href="Crisis/byZone.php">Zonal Crisis Info</a></li>
	<li><a href="Crisis/DbyD.php">Annual Crisis Info</a></li>
	<li><a href="Crisis/DcountByYear.php">Annual Crisis Count</a></li>
	<li><a href="Crisis/Relief/RelManage.php">Relief Info</a></li>
	<li><a href="newEntry.php">Crisis Entry</a></li>
	<li><a href="victimEntry.php">Victim Entry</a></li>
</div>

</body>
</html>