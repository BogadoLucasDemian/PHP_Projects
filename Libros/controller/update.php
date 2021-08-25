<?php 
	include "link.php";
	$actualId = $_POST['actualId'];
	$code=$_POST['code'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$student=$_POST['student'];
	mysqli_query($link, "UPDATE libros SET codigo = '$code', titulo = '$title', autor = '$author', dniAlumno = '$student' WHERE codigo = $actualId");
	header("Location: ./../index.php");
?>