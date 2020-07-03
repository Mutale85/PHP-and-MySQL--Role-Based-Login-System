// Validating the user inputs
function usernameValidate(username) {
	if (username.length <= 3) {
		$(".username-error").html("Username can't be less than 3 characters").addClass('text-danger');
		return false;
	}else{
		$(".username-error").html("");
	}
}

function passwordValidate(password) {
	if (password.length <= 5) {
		$(".password-error").html("Password can't be less than 6 characters").addClass('text-danger');
		return false;
	}else{
		$(".password-error").html("");
	}
}


$(document).ready(function(){
	// Create account Form
	$("#registerForm").submit(function(event){
		event.preventDefault();
		if ($("#username").val() == "") {
			$(".username-error").html("Username is required").addClass('text-danger');
			return false;
		}else{
			$(".username-error").html("");
		}

		if ($("#password").val() == "") {
			$(".password-error").html("password is required").addClass('text-danger');
			return false;
		}else{
			$(".password-error").html("");
		}

		if ($("#user_role").val() == "") {
			$(".user_role_error").html("user role is required").addClass('text-danger');
			return false;
		}else{
			$(".user_role_error").html("");
		}

		// We use ajax to process the form data to php
		$.ajax({
			url:"data/insert.php",
			method:"post",
			data:$(this).serialize(),
			beforeSend:function(){
				$(".submit-button").html("Loading...");
			},
			success:function (data) {
				$(".submit-button").html("Submit");
				$(".result-div").html(data).addClass("alert alert-success text-success");
				$("#registerForm")[0].reset();
			}
		})
	});

	// Login Form 

	$("#loginForm").submit(function(e){
		e.preventDefault();
		if ($("#username").val() == "") {
			$(".username-error").html("Username is required").addClass('text-danger');
			return false;
		}else{
			$(".username-error").html("");
		}

		if ($("#password").val() == "") {
			$(".password-error").html("Password is required").addClass('text-danger');
			return false;
		}else{
			$(".password-error").html("");
		}
		$.ajax({
			url:"data/login.php",
			method:"post",
			data:$(this).serialize(),
			success:function(data){
				alert(data);
				window.location = "./";//  this functions takes us back to the index page
			}
		})
	})
})

