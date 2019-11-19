<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['Tipo_usuario']!="Admin"){
			header("Location: ../User");
		}
	}else{
		header('Location: ../');
	}
?>
<?php  
	$conexion = mysqli_connect('localhost','root', 'reinoloco10', 'cityview');
?>
<!DOCTYPE html>
<html>
<head>
	<title> CityView</title>
	<link rel="stylesheet" type ="text/css" href="adminEstilos.css">
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
			<table border="1px solid white">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Usuario</td>
					<td>Pass</td>
					<td>Tipo Usuario</td>
				</tr>
				<?php
					$sql="SELECT * FROM usuarios";
					$result=mysqli_query($conexion, $sql);
					while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['idusuarios']?></td>
					<td><?php echo $mostrar['Nombre']?></td>
					<td><?php echo $mostrar['Usuario']?></td>
					<td><?php echo $mostrar['Password']?></td>
					<td><?php echo $mostrar['Tipo_usuario']?></td>
				</tr>
				<?php
				}
				?>	
			</table>
		</div>
		<div class="container2">
			<form action="" id="forming">
				<input type="text" name="idlg" placeholder="Introduce un ID" pattern="[0-9]{1,10}" class="entryId" required/>
				<input type="submit" class="botonlg" value="Eliminar">
			</form>
		</div>
	</header>
	<div class="botonSesion"><a href="salir.php"><span class="fas fa-door-open"></span></a></div>
</body>
</html>