<?php 
	include "link.php";
	$code = $_POST['code'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$name = $_POST['name'];
	$last = $_POST['last'];
	$dni = $_POST['dni'];
	$tel = $_POST['tel'];
	$checkBook = mysqli_query($link, "SELECT * FROM libros WHERE codigo = $code");
	$checkStudent = mysqli_query($link, "SELECT * FROM alumnos WHERE dni = $dni");
	if(mysqli_num_rows($checkBook) < 1 && mysqli_num_rows($checkStudent) < 1){
		mysqli_query($link, "INSERT INTO libros (codigo, titulo, autor, dniAlumno, prestamo) VALUES ($code, '$title', '$author', $dni, now())");
		mysqli_query($link, "INSERT INTO alumnos (nombre, apellido, dni, telefono) VALUES ('$name', '$last', $dni, $tel)");
		header("Location: ./../index.php");
	}
	if (mysqli_num_rows($checkBook) < 1 && mysqli_num_rows($checkStudent) == 1) {
		mysqli_query($link, "INSERT INTO libros (codigo, titulo, autor, dniAlumno, prestamo) VALUES ($code, '$title', '$author', $dni, now())");
		header("Location: ./../index.php");
	}
	if (mysqli_num_rows($checkBook) == 1 && mysqli_num_rows($checkStudent) < 1) {
		mysqli_query($link, "INSERT INTO alumnos (nombre, apellido, dni, telefono) VALUES ('$name', '$last', $dni, $tel)");
		header("Location: ./../index.php?errBook");
	}
	if (mysqli_num_rows($checkBook) == 1 && mysqli_num_rows($checkStudent) == 1) {
		header("Location: ./../index.php?errAmbos");
	}
?>