<?php
	 require 'connection.php';
	 $id = $_GET['id'];
	$sql = "SELECT * FROM employees WHERE id = $id";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();

	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$salary = $_POST['salary'];
	$dob = $_POST['dob'];

	$updatesql = " UPDATE employees SET name = '$name', 
				age = $age, 
				gender = '$gender', 
				email = '$email', 
				phone_number = $phone_number, 
				salary = '$salary', 
				dob = '$dob'";


	if(!empty($_FILES['image']['name'])){
		$rand = rand(1111, 9888888);
		$image = 'upload/'.$rand.$_FILES['image']['name'];
		$uploads = 'upload/'.$rand.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $uploads);

		$updatesql .= ", image = '$image'";

		if(!empty($data['image']) && file_exists($data['image'])){
			unlink($data['image']);
		}
	}

	$updatesql .= " WHERE id = $id";
	$query = $conn->query($updatesql);
	header("Location:index.php");

?>