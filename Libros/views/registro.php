<?php if(!isset($_GET['param'])){ ?>
<div id="registros">
		<a href="index.php?param=nuevo"><input type="button" name="alta" value="Nuevo Préstamo" class="registro"></a>
		<a href="index.php?param=devueltos"><input type="button" name="history" value="Historial" class="registro"></a>
	</div>
<?php } else { ?>
	<center>
		<a href="controller/reset.php"><input type="button" name="borrar" value="Borrar Historial" class="registro"></a>
	</center>
<?php } ?>

<style>
	div#registros{
		width: 715px;
		height: 40px;
		margin: 10px auto;
		text-align: left;
	}
	input.registro{
		border: none;
		background: #01ED76;
		color: white;
		height: 40px;
		width: 200px;
		font-size: 20px;
		font-weight: bold;
	}
	input.registro:hover{
		background: white;
		color: #01ED76;
		cursor: pointer;
	}
	input[name=alta]{
		margin-left: 100px;
	}
	input[name=history]{
		margin-left: 95px;
	}
</style>