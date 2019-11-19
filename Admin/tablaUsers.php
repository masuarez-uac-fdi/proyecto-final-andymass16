<?php  
	$conexion = mysqli_connect('localhost','root', 'reinoloco10', 'cityview');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<br>
	<table border="1px solid black">
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
</body>
</html>