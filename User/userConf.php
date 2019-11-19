<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['Tipo_usuario']!="Usuario"){
			header("Location: ../Admin");
		}
	}else{
		header('Location: ../');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cityview</title>
	<link rel="stylesheet" type ="text/css" href="userEstilos.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.2-web\css\all.css">
	<script src="main.js"></script>

</head>
<body>
	<div class="error">	
		<span>Ocurrio un problema al eliminar</span>
	</div>
	<div class="userCreated">	
		<span>Usuario eliminado satisfactoriamente</span>
	</div>
	<header class="content">
		<div class="logo">
			<img src="logo.png">	
		</div>
		<div class="container">
			<form action="" id="formcg">
				<input type="text" name="idcg" placeholder="ID" pattern="[0-9]{1,15}" class="entryId" style="display: none" value= '<?php print($_SESSION['usuario']['idusuarios']) ?>' required/>
				<input type="text" name="nombrecg" placeholder="Nombre" pattern="[A-Za-z_-]{1,15}" class="entryNombre" value= '<?php print($_SESSION['usuario']['Nombre']) ?>' required/>
				<input type="text" name="usuariocg" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" class="entryUsuario" value='<?php print($_SESSION['usuario']['Usuario']) ?>' required/>
				<input type="password" name="passcg" placeholder="Contrasena" pattern="[A-Za-z0-9_-]{1,15}" class="entryPass" value='<?php print($_SESSION['usuario']['Password']) ?>' required/>
				<input type="submit" class="botoncg" value="Actualizar">
			</form>
		</div>
	</header>
	<div class="botonSesion"><a href="salir.php"><span class="fas fa-door-open"></span></a></div>
</body>
</html>