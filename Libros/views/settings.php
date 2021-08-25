<div id="config">
	<h1 style="color: white;">Configuración</h1>
	<br>
	<h2 style="color:white;">Nuevo Usuario</h2>
	<br>
	<form action="controller/registro.php" method="POST" name="registro" autocomplete="off">
		<label style="color: white">Usuario</label><input type="text" name="user" placeholder="Usuario">
		<label style="color: white">Contraseña</label><input type="password" name="pass" placeholder="Contraseña">
		<input type="submit" name="registrar" value="Guardar">
	</form>
	<br>
	<h2 style="color:white;">Cambiar Contraseña</h2>
	<br>
	<form action="controller/cambiarPass.php" method="POST" name="modify" autocomplete="off">
		<label style="color: white">Usuario</label><input type="text" name="user" placeholder="Usuario"><br>
		<label style="color: white">Contraseña Actual</label><input type="password" name="Apass" placeholder="Contraseña Actual"><br>
		<label style="color: white">Contraseña Nueva</label><input type="password" name="Npass" placeholder="Contraseña Nueva"><br>
		<label style="color: white">Confirmar Contraseña</label><input type="password" name="Cpass" placeholder="Confirmar Contraseña"><br><br>
		<input type="submit" name="modificar" value="Guardar">
	</form>
</div>

<style>
	#config{
		width: 715px;
		height: 330px;
		overflow-y: auto;
		background: rgba(251, 123, 180, 0.8);
		margin: 10px auto;
	}
	form[name="registro"] input{
		margin: 0 30px 0 5px;
	}
	form[name="modify"]{
		width: 700px;
	}
	form[name="modify"] input[type=text], form[name="modify"] input[type=password]{
		position: absolute;
		left: 550px;
	}
	form[name="modify"] label{
		position: absolute;
		left: 370px;
	}
	input[type=submit]{
		width: 100px;
		border: none;
		background: #01ED76;
		color: white;
	}
	input:hover[type=submit]{
		background: white;
		color: #01ED76;
		cursor: pointer;
	}
</style>
