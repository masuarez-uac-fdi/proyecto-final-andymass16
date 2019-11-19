<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['Tipo_usuario']=="Admin"){
		header('Location: Admin/');
	}else if($_SESSION['usuario']['Tipo_usuario']=="Usuario"){
		header('Location: User/');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> CityView</title>
	<link rel="stylesheet" type ="text/css" href="loginEstilos.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="main.js"></script>
	<script src="register.js"></script>
	<script src="formLogin.js"></script>
</head>
<body>
	<div class="error">	
		<span>Datos de acceso no validos</span>
	</div>
	<div class="userCreated">	
		<span>Usuario creado satisfactoriamente</span>
	</div>
	<header class="content">
		<div class="logo">
			<img src="logo.png">
		</div>
		<div class="container">
			<form action="" id="forming">
				<input type="text" name="usuariolg" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" class="entryUsuario" required/>
				<input type="password" name="passlg" placeholder="Contrasena" pattern="[A-Za-z0-9_-]{1,15}" class="entryPass" required/>
				<input type="submit" class="botonlg" value="Iniciar Sesion">
				<a style="color: white; text-decoration: none;"href="#">Registrate</a>
			</form>
			
		</div>
		<div class="container2">
			<form action="" id="formreg">
				<input type="text" name="nombrerg" placeholder="Nombre" pattern="[A-Za-z_-]{1,15}" class="entryNombre" required/>
				<input type="text" name="usuariorg" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" class="entryUsuario" required/>
				<input type="password" name="passrg" placeholder="Contrasena" pattern="[A-Za-z0-9_-]{1,15}" class="entryPass" required/>
				<input type="submit" class="botonrg" value="Crear cuenta">
				<a style="color: white; text-decoration: none;"href="#">Ya tengo cuenta</a>
			</form>
		</div>
	</header>
</body>
</html>