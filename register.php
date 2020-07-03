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
	<title>Sign Up Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width intial-scale=1.0">
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
					<h4 class="text-center">Sign Up Form</h4><hr>
					<form method="post" action="" id="registerForm">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" id="username" class="form-control" onblur="usernameValidate(this.value)">
							<span class="username-error"></span>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control" onblur="passwordValidate(this.value)">
							<span class="password-error"></span>
						</div>
						<div class="form-group">
							<label>Create Account As: </label>
							<select class="form-control" name="user_role" id="user_role">
								<option value="">Select Role</option>
								<option value="admin">Admin</option>
								<option value="user">User</option>
							</select>
							<span class="user_role_error"></span>
						</div>
						<button class="btn btn-primary submit-button" type="Submit">Submit</button>
					</form><hr>
					<div class="result-div"></div>
				</div>
				<p class="text-center"><a href="login.php" class="register">Already a Member ? Login</a></p>
			</div>
		</div>
	</div>
</body>
</html>