<?php 
	include 'link.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sqlCheck = mysqli_query($link, "SELECT * FROM usuarios WHERE user = '$user'");
	if (mysqli_num_rows($sqlCheck) > 0) {
		header("Location: ./../index.php?param=settings&&user");
	}else{
		mysqli_query($link, "INSERT INTO usuarios (user, password) VALUES ('$user', '$pass')");
		header("Location: ./../index.php?param=settings");
	}
?>