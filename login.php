<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
		require 'conn.php';
		sleep(2);
		session_start();

		$mysqli -> set_charset('utf8');
		$usuario = $mysqli->real_escape_string($_POST['usuariolg']);
		$pas = $mysqli->real_escape_string($_POST['passlg']);
			
		if($nueva_consulta = $mysqli->prepare("SELECT /*Nombre, Tipo_usuario*/ * FROM usuarios WHERE Usuario = ? AND Password = ?")){
			    $nueva_consulta-> bind_param('ss',$usuario, $pas);
				$nueva_consulta->execute();
				$resultado = $nueva_consulta ->get_result();
				if($resultado->num_rows == 1){
					$datos = $resultado->fetch_assoc();
					$_SESSION['usuario']=$datos;
					echo json_encode(array('error'=>false, 'tipo'=>$datos['Tipo_usuario']));
				}else{
					echo json_encode(array('error'=>true));
				}
				$nueva_consulta->close();
		}
}     
$mysqli->close();

	/*require 'conn.php';
	sleep(2);
	$usuarios = $mysqli -> query("SELECT Nombre, Tipo_usuario FROM usuarios
		WHERE Usuario = '".$_POST['usuariolg']."' AND Password = '".$_POST['passlg']."'");
	if($usuarios -> num_rows == 1):
		$datos = $usuarios -> fetch_assoc();
		echo json_encode(array('error' => false, 'tipo'=>$datos['Tipo_usuario']));
	else:
		echo json_encode(array('error'=>true));
		
	endif;*/
	
?>