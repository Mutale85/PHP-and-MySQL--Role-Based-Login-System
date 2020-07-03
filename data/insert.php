<?php
// Procedural PHP
include 'db.php';

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($conn, filter_var($_POST['username'], FILTER_SANITIZE_STRING));
	$password = mysqli_real_escape_string($conn, filter_var($_POST['password'], FILTER_SANITIZE_STRING));
	$user_role = mysqli_real_escape_string($conn, filter_var($_POST['user_role'], FILTER_SANITIZE_STRING));
	if ($username == "") {
		echo "Username cannot be empty";
		exit();
	}
	if ($password == "") {
		echo "Password cannot be empty";
		exit();
	}
	if ($user_role == "") {
		echo "User role cannot be empty";
		exit();
	}

	$pass_hash = password_hash($password, PASSWORD_DEFAULT);

	// Check if username is already registered 

	$QUERY = mysqli_query($conn, "SELECT * FROM all_users WHERE username = '$username' LIMIT 1 ") or die(mysqli_error($conn));
	$count = mysqli_num_rows($QUERY);
	if ($count > 0) {
		// User is already registered
		echo "Username is already registered";
		exit();
	}
	// is user is not already registered
	$INSERT = mysqli_query($conn, "INSERT INTO all_users (username, user_password, user_role) VALUES ('$username', '$pass_hash', '$user_role') ") or die(mysqli_error($conn));
	if ($INSERT === TRUE) {
		echo "Hey ".$username. " your account has been created";
	}
}
?>