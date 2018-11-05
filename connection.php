<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "jobsdb";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("can't connect to the database" . mysqli_connect_error());
		}
	?>

</body>
</html>