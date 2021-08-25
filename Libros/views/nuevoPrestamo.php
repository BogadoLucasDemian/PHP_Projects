<form action="./controller/alta.php" method="POST" autocomplete="off">
	<h2 class="libro">Datos del Libro</h2>
	<div class="libro">
		<label for="code">Código</label>
		<input type="text" name="code" id="code" placeholder="Código" required>
		<label for="title">Título</label>
		<input type="text" name="title" id="title" placeholder="Título" required>
		<label for="author">Autor</label>
		<input type="text" name="author" id="author" placeholder="Autor" required>
	</div>
	<h2 class="alumno">Datos del Alumno</h2>
	<div class="alumno">
		<label for="name">Nombre</label>
		<input type="text" name="name" id="name" placeholder="Nombre" required>
		<label for="last">Apellido</label>
		<input type="text" name="last" id="last" placeholder="Apellido" required>
		<label for="dni">DNI</label>
		<input type="text" name="dni" id="dni" placeholder="DNI" required>
		<label for="tel">Teléfono</label>
		<input type="text" name="tel" id="tel" placeholder="Teléfono" required>
	</div>
	<input type="submit" name="agregar">
</form>
<style>
	form{
		position: relative;
		width: 700px;
		height: 300px;
		background: rgba(251, 123, 180, 0.8);
		margin: 10px auto;
	}
	div.libro{
		position: absolute;
		width: 700px;
		height: 75px;
		top: 50px;
	}
	h2.libro{
		position: absolute;
		color: white;
		top: 10px;
		left: 260px;
	}
	div.alumno{
		position: absolute;
		width: 700px;
		height: 75px;
		top: 175px;
	}
	h2.alumno{
		position: absolute;
		color: white;
		top: 135px;
		left: 250px;
	}
	input[type=submit]{
		border: none;
		background: #01ED76;
		color: white;
		height: 30px;
		width: 200px;
		font-size: 20px;
		font-weight: bold;
		margin-top: 260px;
	}
	input:hover[type=submit]{
		background: white;
		color: #01ED76;
		cursor: pointer;
	}
	label{
		color: white;
		font-weight: bold;
		line-height: 75px;
	}
	input[type=text]{
		width: 105px;

	}
</style>