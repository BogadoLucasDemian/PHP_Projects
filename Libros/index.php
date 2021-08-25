<?php 
	session_start();
	include "controller/link.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Bogado, Lucas Demian">
	<link rel="shorcut icon" href="images/Logo.gif">
	<title>Libros</title>
</head>
<body>
	<?php if (isset($_SESSION['usuario'])) { ?>
		<?php 
			include "views/template.php";
			include "controller/show.php";
		?>
	<?php } else { 
		include "controller/alertas.php";
		include "views/loginForm.php";
	} ?>
</body>
</html>
