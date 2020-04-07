<?php
	require 'connection.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM employees WHERE id = $id";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();

	$image_location = $data['image'];
	if(file_exists($image_location)){
		unlink($image_location);
	}

	$sql = "DELETE FROM employees WHERE id = '$id'";
	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Deleted successfully";
		header("Location:index.php");
	}

?>