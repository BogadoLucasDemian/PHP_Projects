<?php 
	session_start();
	include "link.php";
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE user = '$user' AND password = '$pass'");
		if(mysqli_num_rows($sql) == 1){
			$_SESSION['usuario'] = $user;
			header("Location: ./../index.php");
		}
		else{
			header("Location: ./../index.php?error");
		}
	}
?>