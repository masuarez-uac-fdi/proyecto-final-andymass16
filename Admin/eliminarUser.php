<?php
	require 'conn.php';
	sleep(2);

	//NUEVO:
	$sql = "DELETE FROM usuarios WHERE idusuarios = '".$_POST['idlg']."'";
	$stm = $mysqli->prepare($sql);
	

	if($stm->execute()){
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error'=>true));
	}
	$mysqli->close();
?>