<?php 
	include "link.php";
	$key = $_GET['code'];
	$sqlBaja = mysqli_query($link, "SELECT * FROM libros WHERE codigo = $key");
	$arrayBaja = mysqli_fetch_array($sqlBaja);
	mysqli_query($link, "INSERT INTO debaja (codigo, titulo, autor, dniAlumno, prestamo, devolucion) VALUES ($arrayBaja[codigo], '$arrayBaja[titulo]', '$arrayBaja[autor]', $arrayBaja[dniAlumno], '$arrayBaja[prestamo]', now())");
	mysqli_query($link, "DELETE FROM libros WHERE codigo = $key");
	header("Location: ./../index.php");
?>