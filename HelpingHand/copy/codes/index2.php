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
	<ul>
	<li><a href="index2.php">Home</a></li>
	<li><a href="crisis.php">Crisis</a></li>
	<li><a href="team.php">Team</a></li>
	<li><a href="news.php">News & Events</a></li>
	</ul>
</div>

</body>
</html>