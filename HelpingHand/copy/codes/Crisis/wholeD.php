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
	<li><a>Whole disaster infromation</a></li>
</div>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Nirbhik19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DISASTERID,CATEGORY,DISASTER_DATE,KILLED_PEOPLE,AFFECTED_PEOPLE FROM
 `disaster` WHERE 1";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Disaster id</th>
<th>Category</th>
<th>Disaster date</th>
<th>Killed people</th>
<th>Affected people</th>

</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $row['DISASTERID'] . "</td>";
echo "<td>" . $row['CATEGORY'] . "</td>";
echo "<td>" . $row['DISASTER_DATE'] . "</td>";
echo "<td>" . $row['KILLED_PEOPLE'] . "</td>";
echo "<td>" . $row['AFFECTED_PEOPLE'] . "</td>";

echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
