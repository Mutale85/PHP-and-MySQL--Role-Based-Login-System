<?php
include("data/db.php");
$name = $role = "";
if (isset($_SESSION['username'])) {
	$role =  $_SESSION['userRole'];
	if ($role == "admin") {
		header("location:admin.php");//send user to admin.php
	}elseif ($role == "user") {
		header("location:home.php");// send user to home.php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Role Based Sign Up and Login Page</title>
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
				<h2 class="text-center">Role Based Sign-up and Login System</h2><hr>
				<div class="login-page">
					<p>Here is a  user role based signup and login system that allows users to use <b>One Login Form</b> and they are directed to a different page depending on there role. 
					We have two types, User and Admin.
					When user logs in they are taken to a home page, while admin are taken to admin page where they can see number of users.
					</p>
				
					<p class="text-center">
						<a href="login.php" class="btn btn-success"> Sign In</a>
						<a href="register.php" class="btn btn-primary">Create Account</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>