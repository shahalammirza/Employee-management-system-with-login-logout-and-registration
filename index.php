<?php
	require 'connection.php';
	$sql = "SELECT * FROM employees";
	$result = $conn->query($sql);
	session_start();

	if(!isset($_SESSION['login'])){
		header('Location:login.php');
		die();
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Employee Management system</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Navbar start -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  				<a class="nav-item nav-link active" href="insert.php">Add-Employee <span class="sr-only">(current)</span></a>
  				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    				<div class="navbar-nav ml-auto">
      					<a class="nav-item nav-link active" href="logout.php">Logout</a>
    				</div>
  				</div>
			</nav>
			<!--Navbar End  -->
			<?php if(isset($_SESSION['msg'])){?>
			<div id="myAlert" class="alert alert-info alert-zoom-in-out">
				<a href="#" class="close" data-dismiss="alert"
				aria-label="close">&times;</a>
				<a href="alert" class="close zoomIn" data-zoomIn="alert" aria-label="zoom in">+</a>
				<a href="alert" class="close zoomOut" data-zoomOut="alert"  aria-label="zoom out">-</a>
				<a href="alert" class="close high-contrast" data-highContrast="alert" aria-label="high contrast mode"><i class="fa fa-adjust"></i></a>
				<p><strong> Alert </strong></p>
				<p><?php echo $_SESSION['msg'];?></p>
			</div>  
  			<?php unset($_SESSION['msg']); }?>
			<h2 class="text-center">Employee Details</h2>
			<br><br>
			<table class="table table-bordered text-center table-sm">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Name</th>
						<th class="text-center">Age</th>
						<th class="text-center">Gender</th>
						<th class="text-center">Email</th>
						<th class="text-center">Phone_NO</th>
						<th class="text-center">Salary</th>
						<th class="text-center">image</th>
						<th class="text-center">Dob</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = $result->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id'] ;?></td>
						<td><?php echo $row['name'] ;?></td>
						<td><?php echo $row['age'] ;?></td>
						<td><?php echo $row['gender'] ;?></td>
						<td><?php echo $row['email'] ;?></td>
						<td><?php echo $row['phone_number'] ;?></td>
						<td><?php echo $row['salary'] ;?></td>
						<td><img src="<?php echo $row['image'] ;?>" width="100"></td>
						<td><?php echo $row['dob'] ;?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
							<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">View</a>
							<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')" >Delete</a>

						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>
</html>
