<?php include 'controller/listados.php'; ?>
	<table>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
		</tr>
		<?php while($arrayAlumno = mysqli_fetch_array($sqlAlumno)){ ?>
			<tr>
				<td> <?php echo $arrayAlumno[0] ?> </td>
				<td> <?php echo $arrayAlumno[1] ?> </td>
				<?php if (isset($_GET['expiro'])) { ?>
					<td> <a href="http://web.whatsapp.com/send?text=Buen Día, me comunico de la Escuela Técnica para informar que adeuda el libro n°<?php echo $_GET['expiro']; ?>. Por favor retornarlo lo mas pronto posible, Gracias.&phone=+549<?php echo $arrayAlumno[3] ?>" target="_blank" rel="noopener" onload="enviar()" style="color: navy"><?php echo $arrayAlumno[3] ?> </a> </td>
				<?php } else { ?>
					<td> <?php echo $arrayAlumno[3] ?> </td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
<div id="tabla">
	<table>
		<tr>
			<td>Código</td>
			<td>Título</td>
			<td>Autor</td>
			<td>Prestamo</td>
			<td>Estado</td>
		</tr>
		<?php while($arrayABook1 = mysqli_fetch_array($sqlABook1)){ ?>
			<tr>
				<?php 
				if (isset($_GET['expiro'])) {
					if ($arrayABook1[0] == $_GET['expiro']) { ?>
						<td style="color: red;"> <?php echo $arrayABook1[0] ?> </td>
				<?php } else { ?>
					<td> <?php echo $arrayABook1[0] ?> </td>
				<?php } } else{ ?>	
					<td> <?php echo $arrayABook1[0] ?> </td>
				<?php } ?>
				<td> <?php echo $arrayABook1[1] ?> </td>
				<td> <?php echo $arrayABook1[2] ?> </td>
				<td> <?php echo $arrayABook1[4] ?> </td>
				<td> Pendiente </td>
			</tr>
		<?php } ?>
		<?php while($arrayABook2 = mysqli_fetch_array($sqlABook2)){ ?>
			<tr>
				<td> <?php echo $arrayABook2[0] ?> </td>
				<td> <?php echo $arrayABook2[1] ?> </td>
				<td> <?php echo $arrayABook2[2] ?> </td>
				<td> <?php echo $arrayABook2[4] ?> </td>
				<td> Devuelto </td>
			</tr>
		<?php } ?>
	</table>
</div>
<style>
	table{
		background: rgba(251, 123, 180, 0.8);
		color: white;
		font-weight: bold;
		width: 700px;
		margin: 10px auto;
	}
	td{
		width: 100px;
	}
	div#tabla{
		height: 300px;
		width: 715px;
		overflow-y: auto;
		margin: 10px auto;
	}
</style>