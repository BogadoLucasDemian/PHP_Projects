<div id="login">
	<form action="controller/login.php" method="POST" autocomplete="off">
		<h1>Iniciar Sesión</h1>
		<input type="text" name="user" placeholder="Nombre de Usuario">
		<input type="password" name="pass" placeholder="Contraseña">
		<input type="submit" name="login" value="Iniciar Sesión">
	</form>
</div>
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
	#login{
		position: relative;
		width: 400px;
		height: 300px;
		border-radius: 80px;
		background: rgba(251, 123, 180, 0.8);
		margin: 0 auto;
		top: 15vh;
	}
	h1{
		position: relative;
		color: white;
		top: 20px;
	}
	input[name=user]{
		position: relative;
		top: 60px;
		width: 300px;
		border-radius: 20px;
		border: none;
		padding: 5px;
	}
	input[name=pass]{
		position: relative;
		top: 100px;
		width: 300px;
		border-radius: 20px;
		border: none;
		padding: 5px;
	}
	input[type=submit]{
		position: relative;
		top: 140px;
		width: 300px;
		border-radius: 20px;
		border: none;
		padding: 5px;
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