<?php 
	$username   = "";
	$first_name = "";
	$last_name  = "";
	$email      = "";
	$errors     = array();
	$password   = "";
	
	$db = mysqli_connect ('localhost', 'root', '', 'Nirbhik19');
	
	if (isset($_POST['register'])) {
		$username   = $_POST['username'];
		$first_name = $_POST['first_name'];		
		$last_name  = $_POST['last_name'];
		$email      = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
	
		if(empty($username))			array_push($errors, "Username is required");
		if(empty($first_name))			array_push($errors, "First Name is required");
		if(empty($last_name))			array_push($errors, "Last Name is required");
		if(empty($email))				array_push($errors, "Email is required");
		if(empty($password_1))			array_push($errors, "Password is required");
		if($password_1 != $password_2)	array_push($errors, "The passwords do not match!");
		
		if (count($errors)== 0) {
			$sql = "INSERT INTO users (username, password, first_name, last_name, email) VALUES ('$username', '$password_1', '$first_name', '$last_name', '$email')";
			mysqli_query($db,$sql);
			header('Location: http://localhost/nirbhik19/index2.php'); }
		}
		
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password_1'];
			
			if(empty($username))	array_push($errors, "Username is required");
			if(empty($password))	array_push($errors, "Password is required");

			if (count($errors) == 0) {
				$sql    = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($db, $sql);
				
				if (mysqli_num_rows($result))	{
					$row = mysqli_fetch_array($result);
					
					session_start(); 
					$_SESSION['username'] = $row['username']; 
					$_SESSION['logged']   = TRUE; 
					
					header('Location: http://localhost/nirbhik19/index2.php'); 
					exit; }
					
				else	array_push($errors, "Wrong username/password");	}
		}
 ?>