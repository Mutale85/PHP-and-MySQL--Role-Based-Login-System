<?php
include("data/db.php");
$role =  $_SESSION['userRole'];
if (!isset($_SESSION['username'])) {
	header("location:./");
}else if (isset($_SESSION['userRole'])) {
	if ($_SESSION['userRole'] == "user") {
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
				<div class="home-page">
					<h1 class="text-center">Welcome:  <?php echo $_SESSION['username'] ?></h1>
					<p align="right"><a href="logout.php" class="">Log Out</a></p>
					<hr>
					<div class="admin-page">
						<div class="text-success">You are: <?php echo ucwords($_SESSION['userRole'])?></div>
						<!-- Adming should See how many users are registered -->
						<div align="right">
							<?php
							$Query = mysqli_query($conn, "SELECT * FROM all_users WHERE user_role != '$role' ") or die(mysqli_query($conn));
							$count = mysqli_num_rows($Query);
							if ( $count > 0) {
								echo 'Total Users: <b>'. $count. '</b>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>