<?php include('server.php'); ?>
<?php session_start(); ?>


 
 <?php 
  if(isset($_SESSION['logged'])) { 
      echo $_SESSION['username'];
      echo '<div class="title"><center><h1><a href="logout.php">Log Out</a></h1></center></div>';
   }
  else echo '<div class="title"><center><h1><a href="login.php">Log In</a></h1></center></div>';
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

</body>
</html>