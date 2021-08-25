<?php 
	include "link.php";
	if (isset($_GET['dni'])) {
		$dni = $_GET['dni'];
		$sqlAlumno = mysqli_query($link, "SELECT * FROM alumnos WHERE dni = $dni");
		$sqlABook1 = mysqli_query($link, "SELECT * FROM libros WHERE dniAlumno = $dni");
		$sqlABook2 = mysqli_query($link, "SELECT * FROM debaja WHERE dniAlumno = $dni");

	}
	$sqlBook = mysqli_query($link, "SELECT * FROM libros ORDER BY codigo");
	$sqlBajas = mysqli_query($link, "SELECT * FROM debaja ORDER BY codigo");
?>