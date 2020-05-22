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
    
</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpinghand";
$vname           = $_POST['name'];
$varea           = $_POST['area'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    
        if(empty($vname))			array_push($errors, "Victim name is required");
    
        if (count($errors) == 0) {
				$sql   = "SELECT NAME,VSTATUS, ZNAME FROM victim , affected_zone , zone WHERE victim.DISASTERID = affected_zone.DISASTERID AND affected_zone.ZONEID=zone.ZONEID
                    AND NAME = '$vname'
                    AND ZNAME ='$varea'";
				$result = mysqli_query($db, $sql);
				
        
				if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo"<tr>";
echo "<div style ='font:30 px'><td>";
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['VSTATUS'] . "</td>";
        echo "<td>" . $row['ZNAME'] . "</td>";
echo "</tr>"; echo "<br>";
}
echo "</table>";
} 
                    
                
         else	echo "Status Unknown";	
        }
    



/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<div style ='font:30 px'><td>" 
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['VSTATUS'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}*/

mysqli_close($conn);
?>
