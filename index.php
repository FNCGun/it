<?php
	
	session_start();
	if (isset($_SESSION['username'])) {
		$username=$_SESSION['username'];
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jobs Main Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.divmarg{
  		margin: 15px;
  	}

  	.div2{
  		float: left;
  		margin-right: 20px;
  		font-size: 150%;
  		font-family: serif;
  	}

  	.img{
  		width:70px;
  		height:70px;
  		border: 1px black solid;
  	}
  	.container{
  		align-content: center;
  	}

  </style>
</head>
<body class="container">
	
<div class="container">
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job.png" alt="Default Image" class="img"> </div>
	</div>
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job2.png" alt="Default Image" class="img"> </div>
	</div>
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job3.png" alt="Default Image" class="img"> </div>
	</div>
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job4.png" alt="Default Image" class="img"> </div>
	</div>
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job5.png" alt="Default Image" class="img"> </div>
	</div>
	<div class="divmarg">
		<div class="div2">
			<div>Job Title Here</div>
			<div>Company Name Here</div>
		</div>
		<div> <img src="img/job6.png" alt="Default Image" class="img"> </div>
	</div>
	

</div>
	
</body>
</html>

<?php

	}
	else{
		header("location:login.php");
	}
?>