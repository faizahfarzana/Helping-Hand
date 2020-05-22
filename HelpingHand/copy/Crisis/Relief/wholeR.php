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

	<li><a>Volunteers Information</a></li>
	
</div>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Nirbhikbaby";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT RELIEFID,TOTALCOST,relief.date as b,disaster.CATEGORY as a FROM
 relief,disaster WHERE
 relief.disasterid=disaster.DISASTERID";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Total cost</th>
<th>Date</th>
<th>Disaster Category</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $row['RELIEFID'] . "</td>";
echo "<td>" . $row['TOTALCOST'] . "</td>";
echo "<td>" . $row['b'] . "</td>";
echo "<td>" . $row['a'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
