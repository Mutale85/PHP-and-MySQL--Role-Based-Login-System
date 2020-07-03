<?php
include("data/db.php");

if (!isset($_SESSION['username'])) {
	header("location:./");
}else if (isset($_SESSION['userRole'])) {
	if ($_SESSION['userRole'] == "admin") {
		header("location:admin.php");
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
				<div class="home-page">
					<h1 class="text-center">Welcome:  <?php echo $_SESSION['username'] ?></h1>
					<p align="right">
						<a href="logout.php" class="">Log Out</a>
					</p>
					<hr>
					<p>You are User</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>