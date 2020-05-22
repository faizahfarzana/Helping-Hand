<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `volunteeer` WHERE 1";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>NAME</th>
<th>ADDRESS</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['ADDRESS'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
