<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
		require("connection.php");

		$jobid = $_GET['jobid'];

		$query = "SELECT * FROM joboffers WHERE jobid = '$jobid'";
		$query2= "SELECT * FROM contact WHERE jobid= '$jobid'";

		$result = mysqli_query($conn, $query);
		$result2 = mysqli_query($conn, $query2);
		echo mysqli_error($conn);

		foreach ($result as $joboffers) {
			echo "Job ID: " . $joboffers['jobid'];
			echo "<br>";
			echo "Job Title: " . $joboffers['jobtitle'];
			echo "<br>";
			echo "Company Name:" . $joboffers['compName'];
			echo "<br>";
			if ($joboffers['category']==1) {
			  	echo "Full Time Job";
			  }
			else{
				echo "Part Time Job";
			}  
			echo "<br>";
			echo $joboffers['address'];
			echo "<br>";
			echo "street " . $joboffers['street'];
			echo "<br>";
			echo $joboffers['city'];
			echo "<br>";
			echo $joboffers['description'];
			echo "<br>";
			echo $joboffers['req'];
			echo "<br>";
			echo $joboffers['salary'];
			echo "<br>";
			if ($joboffers['paid']==1) {
				echo "This is a paid job offer!";
			}
			else{
				echo "This job offer is not paid";
			}
			echo "<br>";
			foreach ($result2 as $contact) {
				echo "email " . $contact['email'];
				echo "<br>";
				echo "tel nom " . $contact['telenom'];
				echo "<br>";
			}

			echo "<a href = 'jobdetails.php?jobid=" . $joboffers['jobid'] . "'> Job Details </a>";
		}



	?>
</body>
</html>