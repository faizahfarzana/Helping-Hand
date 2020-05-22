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
        if(isset($_SESSION['logged'])){          
            echo $_SESSION['username'];
            echo '<h1><a href="logout.php">Log Out</a></h1>';}
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

$sql = "SELECT category as `Disaster`, disaster_date as `Disaster Date`, sum(quantity) as `total quantity`, sum(cost) as `total cost` FROM treatment, relief, disaster where relief.disasterid = disaster.DISASTERID and treatment.RELIEFID = relief.RELIEFID group by treatment.RELIEFID";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Disaster</th>
<th>Disaster Date</th>
<th>total quantity</th>
<th>Total Cost</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr>";
        echo "<td>" . $row['Disaster'] . "</td>";
        echo "<td>" . $row['Disaster Date'] . "</td>";
        echo "<td>" . $row['total quantity'] . "</td>";
        echo "<td>" . $row['total cost'] . "</td>";
        echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
