<?php
include("db.php");

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($conn, filter_var($_POST['username'], FILTER_SANITIZE_STRING));
	$password = mysqli_real_escape_string($conn, filter_var($_POST['password'], FILTER_SANITIZE_STRING));
	$QUERY = mysqli_query($conn, "SELECT * FROM all_users WHERE username = '$username' LIMIT 1 ") or die(mysqli_error($conn));
	if (mysqli_num_rows($QUERY) == 1) {
		foreach ($QUERY as $row) {
			// Now we check if the password is the correct one.
			if ( password_verify($password, $row['user_password']) ) {
				#we will log in the user Here.
				# We create sessions and store the user data there
				$_SESSION['username'] = $row['username'];
				$_SESSION['userRole'] = $row['user_role'];
				echo $username. " Logs In";
			}else{
				// Wrong Password
				echo "Incorect Username or Password"; 
				// echo "Incorrect Password";
			}
		}
	}else{
		echo "Sorry ". $username ." is not registered";
	}
}
?>