<?php

	require "connection.php";

	if (isset($_POST['email'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$telenom = $_POST['telenom'];
		$address = $_POST['address'];
		$email = $_POST['email'];

		echo $username . " " . $password . " " . $telenom . " " . $address . " " . $email . "<br>";


		$query = "INSERT INTO users (username, password, telenom, address, email) VALUES ('$username', '$password', $telenom, '$address', '$email')" ;

		$result = mysqli_query($conn, $query);

		if ($result) {
				header("location:login.php");
				echo "Saved Successfuly :)";
			}
		else{
				echo "Not Registered. A Problem Happened!";
			}
	}

	else{
		header("location:regform.html");
	}

?>