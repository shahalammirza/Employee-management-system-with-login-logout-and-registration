<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<?php if (isset($_SESSION['error_msg'])) { ?>
			<div class="alert alert-danger" role="alert">
  				<?php echo $_SESSION['error_msg'];?>
			</div>
			<?php 
				session_destroy();
			} ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="registration_warper">
					<h2 class="text-center registration_heading">Registration</h2>
					<form method="POST" action="confirm_registration.php">
						<div class="input-box">
							<input type="text" autocomplete="off" name="name" required="">
							<label>name:</label>
						</div>
						<div class="input-box">
							<input type="text" autocomplete="off" name="email" required="">
							<label>Email:</label>
						</div>
						<div class="input-box">
							<input type="text" autocomplete="off" name="password" required="">
							<label>password:</label>
						</div>
						<div class="input-box">
							<input type="text" autocomplete="off" name="confirm_password" required="">
							<label>Confirm Password:</label>
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
						Already have an account!<a type="submit" class="btn btn-link" href="login.php">Login</a>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>

	</div>

	
</body>
</html>