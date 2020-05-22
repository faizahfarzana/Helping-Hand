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
	<li><a href="http://localhost/helpinghand/counters.php">Relife count</a></li>
    <li><a href="http://localhost/helpinghand/vsearch.php">Victim Search</a></li>
	</ul>
</div>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpinghand";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT VOLUNTEERID,volunteeer.NAME as b,volunteeer.EMAIL as c,volunteeer.ADDRESS as d,
volunteeer.JOIN_DATE as e,organizer.NAME as a FROM organizer,volunteeer WHERE 
organizer.ORGANIZERID=volunteeer.ORGANIZERID";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Join date</th>
<th>Lead</th>
</tr>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<div style ='font:30 px'><td>" . $row['VOLUNTEERID'] . "</td>";
echo "<td>" . $row['b'] . "</td>";
echo "<td>" . $row['c'] . "</td>";
echo "<td>" . $row['d'] . "</td>";
echo "<td>" . $row['e'] . "</td>";
echo "<td>" . $row['a'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
