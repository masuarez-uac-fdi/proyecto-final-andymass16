<?php
	require 'conn.php';
	sleep(2);

	//NUEVO:
	$sql = "INSERT INTO usuarios(Nombre, Usuario, Password, Tipo_usuario) 
	VALUES ('".$_POST['nombrerg']."',
	 '".$_POST['usuariorg']."',
	 '".$_POST['passrg']."',
	 'Usuario')";
	$stm = $mysqli->prepare($sql);
	

	if($stm->execute()){
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error'=>true));
	}

	/*
	//ANTERIOR: 
	$usuarios = $mysqli -> query("SELECT Nombre, Tipo_usuario FROM usuarios
		WHERE Usuario = '".$_POST['usuariolg']."' AND Password = '".$_POST['passlg']."'");
	if($usuarios -> num_rows == 1):
		$datos = $usuarios -> fetch_assoc();
		echo json_encode(array('error' => false, 'tipo'=>$datos['Tipo_usuario']));
	else:
		echo json_encode(array('error'=>true));	
	endif;*/
?>