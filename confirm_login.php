<?php
	require 'connection.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = $conn->query($sql);
	$data = mysqli_num_rows($result);

	if($data == 1){
		session_start();
		$_SESSION['login'] = true;
		header('Location:index.php');
	}else{
		session_start();
		$_SESSION['error'] = "Wrong Email and Password";
		header("Location:login.php");
	}

?>
