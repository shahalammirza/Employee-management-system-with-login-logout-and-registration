<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Contact-warpper">
		<div class="container">
			<?php if(isset($_SESSION['error'])){?>
					<div class="alert alert-danger" role="alert">
  						<?php echo $_SESSION['error'];?>
					</div>
				<?php 
					session_destroy();
				} ?>

				<?php if(isset($_SESSION['reg_msg'])){?>
					<div class="alert alert-success" role="alert">
  						<?php echo $_SESSION['reg_msg'];?>
					</div>
				<?php 
					session_destroy();
				} ?>
			<div class="row">
				<div class="col-md-6">
					<div id="bphoto" style="background-image: url(img/4801.jpg);"></div>
				</div>
				
					<div class="col-md-6">
						<div class="form-section">
							<h2 class="text-center contact-heading">User Login</h2>
							<form method="POST" action="confirm_login.php">
								<div class="input-box">
									<input type="text" autocomplete="off" name="email" required="">
									<label>Email:</label>
								</div>
								<div class="input-box">
									<input type="text" autocomplete="off" name="password" required="">
									<label>Password:</label>
								</div>
								<button type="submit" class="btn btn-success">Login</button>
								<a type="submit" class="btn btn-link" href="registration.php">Creat a new account!</a>
							</form>
						</div>
					</div>

			</div>
		</div>
	</div>
</body>
</html>