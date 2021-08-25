<?php 
	include 'listados.php';
	if (isset($_GET['param'])) {
		$mostrar = $_GET['param'];
		switch ($mostrar) {
			case 'nuevo':
				$titulo = "Nuevo Préstamo";
				break;
			case 'devueltos':
				$titulo = "Historial de Préstamos";
				break;
			case 'alumno':
				$arrayAlumno = mysqli_fetch_array($sqlAlumno);
				$titulo = "Registro del alumno ".$arrayAlumno['dni'];
				break;
			default:
				$titulo = "Biblioteca";
				break;
		}
	}
	else
	{
		$titulo = "Biblioteca";
	}
?>