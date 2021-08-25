<?php include "./controller/filter.php"; ?>
<div id="buscador">
	<form action="" method="POST" autocomplete="off">
		<label for="busqueda">Filtrar por:</label>
		<select name="filtro" id="busqueda">
			<option value="codigo">Código</option>
			<option value="titulo">Título</option>
			<option value="autor">Autor</option>
			<option value="dniAlumno">DNI de Alumno</option>
		</select>
		<label for="valor">Buscar</label>
		<input type="text" id="valor" name="value" placeholder="Buscar">
		<input type="submit" name="filtrar" value="Enviar"> 
	</form>
</div>
<style>
	div#buscador{
		width: 715px;
		height: 40px;
		margin: 10px auto;
	}
	form{
		width: 700px;
		height: 40px;
		background: rgba(251, 123, 180, 0.8);
		border-radius: 20px;
		text-align: left;
	}
	label[for=busqueda]{
		margin-left: 60px;
	}
	label{
		margin-left: 20px;
		color: white;
		font-weight: bold;
		line-height: 40px;
	}
	input[type=text]{
		border-radius: 20px;
		border: none;
		padding: 2px;
	}
	input[type=submit]{
		margin-left: 20px;
		padding: 2px;
		width: 130px;
		border-radius: 20px;
		border: none;
		background: #01ED76;
		color: white;
		font-weight: bold;
	}
	input:hover[type=submit]{
		color: #01ED76;
		background: white;
		cursor: pointer;
	}
</style>
