<div id="tabla">
	<table>
		<tr>
			<td>Código</td>
			<td>Título</td>
			<td>Autor</td>
			<td>Alumno</td>
			<td>Prestamo</td>
			<?php if (!isset($_GET['param'])){ ?>
				<td colspan="2">Acción</td>
			<?php } ?>
		</tr>
		<?php 
			if (!isset($_GET['param'])) {
				
			if(!isset($_POST['filtrar'])){ 
				include "./controller/listados.php";
				$date1 = new DateTime("now");
				while($arrayBook = mysqli_fetch_array($sqlBook)){
					$date2 = new DateTime($arrayBook[4]);
					$diff = $date1->diff($date2);
				?>
					<tr>
						<td><?php echo $arrayBook[0]; ?></td>
						<td><?php echo $arrayBook[1]; ?></td>
						<td><?php echo $arrayBook[2]; ?></td>
						<?php if ($diff->m > 0) { 
							echo "<script> alert('El plazo para devolver el libro N° $arrayBook[0] expiro, hay que contactar al alumno $arrayBook[3] '); </script>"
							?>
							<td><a href="index.php?param=alumno&&dni=<?php echo $arrayBook[3]; ?>&&expiro=<?php echo $arrayBook[0]; ?>" style="color: red;"><?php echo $arrayBook[3]; ?></a></td>	
						<?php } else { ?>
							<td><a href="index.php?param=alumno&&dni=<?php echo $arrayBook[3]; ?>" style="color: white;"><?php echo $arrayBook[3]; ?></a></td>	
						<?php } ?>
						<td><?php echo $arrayBook[4]; ?></td>
						<td><a href="index.php?param=modify&&key=<?php echo $arrayBook[0]; ?>" style="color: #01ED76; ">Editar</a></td>
						<td><a href="controller/baja.php?code=<?php echo $arrayBook[0] ?>" style="color: red;">Devuelto</a></td>
					</tr>
			<?php } } else { 
				include "./controller/filter.php";
				while($arrayFilter = mysqli_fetch_array($sqlFilter)){ ?>
					<tr>
						<td><?php echo $arrayFilter[0]; ?></td>
						<td><?php echo $arrayFilter[1]; ?></td>
						<td><?php echo $arrayFilter[2]; ?></td>
						<td><a href="index.php?param=alumno&&dni=<?php echo $arrayBook[3]; ?>" style="color: white;"><?php echo $arrayFilter[3]; ?></a></td>
						<td><?php echo $arrayFilter[4]; ?></td>
						<td><a href="index.php?param=modify&&key=<?php echo $arrayBook[3]; ?>" style="color: #01ED76; ">Editar</a></td>
						<td><a href="controller/baja.php?dni=<?php echo $arrayBook[3] ?>" style="color: red;">Devuelto</a></td>
					</tr>
			<?php } } } else {
				if (!isset($_POST['filtrar'])) { 
					include "./controller/listados.php";
					while($arrayBajas = mysqli_fetch_array($sqlBajas)){ ?>
						<tr>
							<td><?php echo $arrayBajas[0]; ?></td>
							<td><?php echo $arrayBajas[1]; ?></td>
							<td><?php echo $arrayBajas[2]; ?></td>
							<td><a href="index.php?param=alumno&&dni=<?php echo $arrayBajas[3]; ?>" style="color: white;"><?php echo $arrayBajas[3]; ?></a></td>
							<td><?php echo $arrayBajas[4]; ?></td>
						</tr>
				<?php } } else{ 
					include "./controller/filter.php";
					while($arrayFilter = mysqli_fetch_array($sqlFilter)){ ?>
						<tr>
							<td><?php echo $arrayFilter[0]; ?></td>
							<td><?php echo $arrayFilter[1]; ?></td>
							<td><?php echo $arrayFilter[2]; ?></td>
							<td><a href="index.php?param=alumno&&dni=<?php echo $arrayBook[3]; ?>" style="color: white;"><?php echo $arrayFilter[3]; ?></a></td>
							<td><?php echo $arrayFilter[4]; ?></td>
						</tr>

				<?php } } } ?>
	</table>
</div>
<style>
	div#tabla{
		height: 300px;
		width: 715px;
		overflow-y: auto;
		margin: 10px auto;
	}
	table{
		background: rgba(251, 123, 180, 0.8);
		color: white;
		font-weight: bold;
		width: 700px;
	}
	td{
		width: 100px;
	}
</style>