<?php 
	if (isset($_GET['error'])) {
		echo "<script> alert('Por favor verificar los datos ingresados');  </script>";
	}
	if (isset($_GET['user'])) {
		echo "<script> alert('El nombre de usuario ya esta en uso');  </script>";
	}
	if (isset($_GET['diff'])) {
		echo "<script> alert('Las contraseñas no coinciden');  </script>";
	}
	if (isset($_GET['null'])) {
		echo "<script> alert('El usuario o la contraseña actual ingresados son incorrectos');  </script>";
	}
?>
