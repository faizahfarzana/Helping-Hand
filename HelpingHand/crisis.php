<?php include('server.php'); ?>
<?php session_start(); ?>
  
<!DOCTYPE html>
<style>
.logo {
    width: 265px;
    margin: 60px auto;
}
</style>
<html>
 <div class="title"><center>
    <?php 
        if(isset($_SESSION['logged'])) {          
            echo $_SESSION['username'];
            echo '<h1><a href="logout.php">Log Out</a></h1>';
        }
        else echo '<h1><a href="login.php">Log In</a></h1>';
    ?>
 </center></div>     
     
<head>
	<title>helping hand</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="title">
	<center>
    <a href="http://localhost/helpinghand/index.php">
  <img src="hh.png"  style="width:150px;height:150px;border:0">
</a>
        </center>
    </div>
    
    <div class="taskmenu">
	<ul>
	<li><a href="http://localhost/helpinghand/team.php">Team</a></li>
	<li><a href="http://localhost/helpinghand/crisis.php">Crisis</a></li>
	<li><a href="http://localhost/helpinghand/counters.php">Relief count</a></li>
    <li><a href="http://localhost/helpinghand/vsearch.php">Victim Search</a></li>
	</ul>
</div>

<div class="taskmenu">
    <li><a href="Crisis/wholeD.php">Overall Crisis Info</a></li>
	<li><a href="Crisis/byZone.php">Zonal Crisis Info</a></li>
	<li><a href="Crisis/DbyD.php">Annual Crisis Info</a></li>
	<li><a href="Crisis/DcountByYear.php">Annual Crisis Count</a></li>
	<li><a href="newEntry.php">Crisis Entry</a></li>
	<li><a href="victimEntry.php">Victim Entry</a></li>
</div>

</body>
</html>