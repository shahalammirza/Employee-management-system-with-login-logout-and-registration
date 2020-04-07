<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header('Location:login.php');
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- Navbar start -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
  					<a class="nav-item nav-link active" href="logout.php">Logout<span class="sr-only">(current)</span></a>
				</div>
				</div>
		</nav>
		<!--Navbar End  -->
		<h2 class="text-center">Add New Employee</h2>
		<br><br>
		<form action="store.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
		    	<label for="name">Name</label>
		    	<input type="text" class="form-control" name="name"  placeholder="Enter Name">
		  	</div>
		  	<div class="form-group">
		    	<label for="age">Age</label>
		    	<input type="text" class="form-control" name="age"  placeholder="Enter Age">
		  	</div>
			<div class="form-group">
		    <label for="reg">Gender</label>
	    		<div class="form-check">
		  			<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
		  			<label class="form-check-label" for="exampleRadios1">Male</label>
	  			</div>
	  			<div class="form-check">
		  			<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Female" checked>
		  			<label class="form-check-label" for="exampleRadios1">Female</label>
	  			</div>
			</div>
			<div class="form-group">
		    	<label for="email">Email</label>
		    	<input type="text" class="form-control" name="email"  placeholder="Enter email">
		  	</div>
		  	<div class="form-group">
		    	<label for="phone number">Phone_NO</label>
		    	<input type="text" class="form-control" name="phone_number"  placeholder="Enter Phone Number">
		  	</div>
		  	<div class="form-group">
		    	<label for="salary">Salary</label>
		    	<input type="text" class="form-control" name="salary"  placeholder="Enter Salary">
		  	</div>
		  	<div class="form-group">
		    	<label for="blood group">Image</label>
		    	<input type="file" class="form-control" name="image"  placeholder="Enter image">
		  	</div>
		  	<div class="form-group">
		    	<label for="dob">Date of birth</label>
		    	<input type="date" class="form-control" name="dob"  placeholder="Enter dob">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>