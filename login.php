<?php
include("data/db.php");
$name = $role = "";
if (isset($_SESSION['username'])) {
	$role =  $_SESSION['userRole'];
	if ($role == "admin") {
		header("location:admin.php");
	}elseif ($role == "user") {
		header("location:home.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-4.0.0.js"></script>
	<script type="text/javascript" src="js/parsing.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Role Based Sign Up and Login System</h2><hr>
				<div class="login-page">
					<h4 class="text-center">Login Form</h4><hr>
					<form method="post" action="" id="loginForm">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" id="username" class="form-control">
							<div class="username-error"></div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control">
							<div class="password-error"></div>
						</div>
						<button class="submit-login" type="Submit">Login</button>
					</form>
				</div>
				<p class="text-center">
					<a href="register.php" class="">Create Account</a>
				</p>
				<div>Test Accounts:</div>
				<p>
					Admin Name: Mutale <br>
					Admin Password: 123456
				</p>
				<p>
					User Name 1: Smith <br>
					User Password: 123456 
				</p>
			</div>
		</div>
	</div>
</body>
</html>