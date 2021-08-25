<?php 
	include 'link.php';
	$user = $_POST['user'];
	$Apass = $_POST['Apass'];
	$Npass = $_POST['Npass'];
	$Cpass = $_POST['Cpass'];
	$sqlCheck = mysqli_query($link, "SELECT * FROM usuarios WHERE user = '$user' AND password = '$Apass'");
	if (mysqli_num_rows($sqlCheck) == 1) {
		if ($Npass == $Cpass){
			mysqli_query($link, "UPDATE `usuarios` SET password='$Npass' WHERE user = '$user'");
			header("Location: ./../index.php?param=settings");
		}else{
			header("Location: ./../index.php?param=settings&&diff");
		}
	}
	else
	{
		header("Location: ./../index.php?param=settings&&null");
	}
?>