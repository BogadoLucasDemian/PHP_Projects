<?php 
	if(isset($_GET['param'])){
		$mostrar = $_GET['param'];
		switch ($mostrar) {
					case 'modify':
						include "./views/modificar.php";
						break;
					case 'nuevo':
						include "./views/nuevoPrestamo.php";
						break;
					case 'devueltos':
						include "./views/buscador.php";
						include "./views/table.php";
						include "views/registro.php";
						break;
					case 'alumno':
						include "./views/datoAlumno.php";
						break;
					case 'settings':
						include "./controller/alertas.php";
						include "./views/settings.php";
						break;
					default:
						header("Location: index.php");
						break;
				}		
	} else {
		include "controller/alertas.php";
		include "views/buscador.php";
		include "views/table.php";
		include "views/registro.php";
	}
?>