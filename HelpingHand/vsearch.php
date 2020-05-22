<?php include('server.php');?>
<?php session_start(); ?>
  
<!DOCTYPE html>
<style>
.logo {
    width: 265px;
    margin: 60px auto;
}
   /* .input-group{
        width: 200px;
        padding-left:  640px;
    }
    #btn{
        height: 20px;
    }*/
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
     <form method="post" action="vresult.php">
    <div class="input-group">
        <label><h1>Victim Name</h1></label>
	   <input type="text" name="name">
        <label><h1>Area</h1></label>
	   <input type="text" name="area">
	</div>

	<div class="input-group" id="btn"> <button type="submit" name="Submit" class="btn">Search</button> </div>  
        
    </form>
    </body>
</html>