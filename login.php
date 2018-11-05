<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

	<?php

		if (isset($_GET['error'])) {
			echo "Invalid Username or Password";
		}

	?>

	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form action="check.php" class="form-container" method="post">
					<h1>Login</h1> <br>
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
				  </div>
				  <input type="submit" value="Login" name="login" class="btn btn-success btn-block"> <br>
				  <a href = 'register.php'>Click here to Sign Up</a> <br>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>

	</div>
	
</body>
</html>