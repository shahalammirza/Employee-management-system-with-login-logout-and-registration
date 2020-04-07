<?php
require 'connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM employees WHERE id = $id";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();

	session_start();
	if(!isset($_SESSION['login'])){
		header('Location:login.php');
		die();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Employee Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<!-- Navbar start -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  				<a class="nav-item nav-link" href="insert.php">Add-Employee <span class="sr-only">(current)</span></a>
  				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    				<div class="navbar-nav mx-auto">
      					<a class="nav-item nav-link active" href="index.php">Home</a>
      					<a class="nav-item nav-link active" href="edit.php?id=<?php echo $data['id']?>">Edit</a>
    				</div>
  				</div>
  				<a class="nav-item nav-link active" href="logout.php">Logout<span class="sr-only">(current)</span></a>
			</nav>
			<!--Navbar End  -->
			<h2 class="text-center">Employee Details</h2>
			<br><br>
			<table class="table table-bordered text-center">
				<tr>
					<th>Name</th>
					<td><?php echo $data['name']?></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><?php echo $data['age']?></td>
				</tr><tr>
					<th>Gender</th>
					<td><?php echo $data['gender']?></td>
				</tr><tr>
					<th>Email</th>
					<td><?php echo $data['email']?></td>
				</tr><tr>
					<th>Phone Number</th>
					<td><?php echo $data['phone_number']?></td>
				</tr><tr>
					<th>Salary</th>
					<td><?php echo $data['salary']?></td>
				</tr><tr>
					<th>Image</th>
					<td><img src="<?php echo $data['image'];?>" width="100"></td>
				</tr><tr>
					<th>Date of Birth</th>
					<td><?php echo $data['dob']?></td>
				</tr>
			</table>
		</div>
	</body>
</html>