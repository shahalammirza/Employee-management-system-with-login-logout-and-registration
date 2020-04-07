<?php
	require 'connection.php';
	$rand = rand(1111, 9888888);
	$image = 'upload/'.$rand.$_FILES['image']['name'];

	$uploads = 'upload/'.$rand.$_FILES['image']['name'];

	move_uploaded_file($_FILES['image']['tmp_name'], $uploads);

	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$emali = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$salary = $_POST['salary'];
	$dob = $_POST['dob'];

	$sql = "INSERT INTO employees VALUES(NULL, '$name','$age', '$gender','$emali','$phone_number','$salary', '$image', '$dob')";
	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Insert Successfully";
		header("Location:index.php");
	}
	

?>