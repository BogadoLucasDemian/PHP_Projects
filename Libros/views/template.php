<header>
	<a href="index.php"><input type="button" name="inicio" value="Inicio"></a>
	<?php include "controller/titulo.php" ?>
	<h1><?php echo $titulo; ?></h1>
	<a href="index.php?param=settings"><img src="images/17789.png" alt="Settings" width="40px" height="40px"></a>
</header>
<footer>
	&copy; Todos Los Derechos Reservados - Bogado, Lucas 2019
</footer>
<style>
	*{
		margin: 0;
		font-family: sans-serif;
	}
	body{
		position: relative;
		background: url(images/Back.jpg);
		background-size: 100vw 100vh;
		background-attachment: fixed;
		height: 100%;
		text-align: center;
	}
	header{
		position: relative;
		width: 1000px;
		background: #FB7BB4;
		top: 0;
		margin: 0 auto;
		text-align: center;
		color: white;
		height: 80px;
		line-height: 80px;
	}
	input[name="inicio"]{
		position: absolute;
		left: 30px;
		height: 20px;
		border: none;
		border-radius: 20px;
		top: 30px;
		background: #01ED76;
		color: white;
		font-weight: bold;
	}
	input:hover[name="inicio"]{
		background: white;
		color: #01ED76;
		cursor: pointer;
	}
	img{
		position: absolute;
		top: 20px;
		right: 20px;
	}
	footer{
		position: fixed;
		width: 100%;
		background: #FB7BB4;
		bottom: 0;
		left: auto;
		text-align: center;
		color: white;
		height: 20px;
		line-height: 20px;
	}
</style>