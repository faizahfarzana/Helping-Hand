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

	<li><a>Who is under whom</a></li>
	
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

$sql = "SELECT organizer.NAME as a,volunteeer.NAME as b FROM organizer,volunteeer WHERE 
organizer.ORGANIZERID=volunteeer.ORGANIZERID";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Organizer name</th>
<th>Volunteer name</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $row['a'] . "</td>";
echo "<td>" . $row['b'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
