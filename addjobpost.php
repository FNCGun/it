<?php

	require 'connection';

	if (isset($_POST['jobid'])) {

		$jobid = $_POST['jobid'];
		$jobtitle = $_POST['jobtitle'];
		$compName = $_POST['compName'];
		$category = $_POST['category'];
		$address = $_POST['address'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$description = $_POST['description'];
		$req = $_POST['req'];
		$salary = $_POST['salary'];
		$paid = $_POST['paid'];

		echo $jobid . " " . $jobtitle . " " . $compName . " " . $category . " " . $address . " " . $street . " " . $city . " " . $description . " " . $req . " " . $salary . " " . $paid . "<br>";


		$query = "INSERT INTO joboffers (jobtitle, compName, category, address, street, city, description, req, salary, paid) VALUES ('$jobid', '$jobtitle', '$compName', $category, '$address', $street, '$city', '$description', '$req', $salary, $paid)" ;

		$result = mysqli_query($conn, $query);

		if ($result) {
				header("location:index.php");
				echo "Added Successfuly :)";
			}
		else{
				echo "Not Added. A Problem Happened!";
			}
	}

	else{
		header("location:index.php");
	}

?>