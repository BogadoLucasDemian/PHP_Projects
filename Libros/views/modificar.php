<table>
	<tr>
		<td>Código</td>
		<td>Título</td>
		<td>Autor</td>
		<td>Alumno</td>
		<td>Guardar</td>
	</tr>
	<?php 
		include "./controller/link.php";
		$key = $_GET['key'];
		$sqlMod = mysqli_query($link, "SELECT * FROM libros WHERE codigo = $key");
		while ($arrayMod = mysqli_fetch_array($sqlMod)) { ?>
			<form action="./controller/update.php" method="POST" autocomplete="off">
				<tr>
					<td><input type="text" name="actualId" value="<?php echo $arrayMod[0]?>" hidden><input type="text" name="code" value="<?php echo $arrayMod[0]?>"></td>
					<td><input type="text" name="title" value="<?php echo $arrayMod[1]?>"></td>
					<td><input type="text" name="author" value="<?php echo $arrayMod[2]?>"></td>
					<td><input type="text" name="student" value="<?php echo $arrayMod[3]?>"></td>
					<td><input type="submit" name="save" value="Guardar"></td>
				</tr>
			</form>
		<?php } ?>
</table>
<style>
	table{
		margin: 10px auto;
		background: rgba(251, 123, 180, 0.8);
		color: white;
		font-weight: bold;
		width: 750px;
	}
	td{
		width: 150px;
	}
	input[type=text]{
		width: 130px;
		text-align: center;
	}
	input[type=submit]{
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