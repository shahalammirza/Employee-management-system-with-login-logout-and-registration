<?php
	require 'connection.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if($password != $confirm_password){
		session_start();
		$_SESSION['error_msg'] = "Password and Confirm Password didn't match";
		header("Location:registration.php");
	}

	$sql = "SELECT * FROM users WHERE name='$name'";
	$result = $conn->query($sql);
	$data = mysqli_num_rows($result);

	if($data == 1){
		session_start();
		$_SESSION['error_msg'] = "This user name already Exist";
		header("Location:registration.php");
	}else{
		$sql = "INSERT INTO users VALUES (NULL,'$name','$email','$confirm_password')";
		$result = $conn->query($sql);
		if($result){
			session_start();
			$_SESSION['reg_msg'] = "Registration Successfully Please login";
			header("Location:login.php");
		}
	}
?>