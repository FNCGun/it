<?php
	session_start();

	if (isset($_POST['username']) and isset($_POST['password'])) {
		
		require 'connection.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username= '$username' AND password = '$password'";

		$result= mysqli_query($conn, $query);

		$num = mysqli_num_rows($result);

		if ($num == 1) {
			header("location:index.php");
			$_SESSION['username'] = $username;
		}
		else{
			header("location:login.php?error=1");
		}
	}
	else{
		header("location:login.php");
	}

?>