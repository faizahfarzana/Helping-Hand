<?php include('server.php'); ?>
<?php session_start(); ?>

<li class='active' style='float:right;'>
 
 <?php 
  if(isset($_SESSION['logged'])) { 
      echo $_SESSION['username'];
	  $_SESSION['logged'] = false;
      echo '<a href="login.php"><span>Log Out</span></a></li>';
   }
  else echo '<a href="login.php"><span>Log In</span></a></li>';
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
    <li><a href="Crisis/wholeD.php">Whole disaster information</a></li>
	<li><a href="Crisis/zone&D.php">Zone by Disaster</a></li>
	<li><a href="Crisis/DbyD.php">Disaster by Date</a></li>
	<li><a href="Crisis/DcountByYear.php">How many disaster each year</a></li>
	<li><a href="Crisis/Relief/RelManage.php">Relief</a></li>
</div>

</body>
</html>