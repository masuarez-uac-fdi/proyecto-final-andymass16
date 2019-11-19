<?php
require 'conn.php';
	sleep(2);
	//..............
	$sql="UPDATE usuarios SET Nombre='".$_POST['nombrecg']."',
        Usuario='".$_POST['usuariocg']."', Password='".$_POST['passcg']."'
        WHERE idusuarios='".$_POST['idcg']."'";
    $stm = $mysqli->prepare($sql);
	//------------------
	if($stm->execute()){
		echo json_encode(array('error'=>false));
	}else{
		echo json_encode(array('error'=>true));
	}

?>