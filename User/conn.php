<?php
	$servername = "localhost";
	$username = "root";
	$password = "reinoloco10";
	$dbname = "cityview";

	$mysqli = new mysqli($servername, $username, $password, $dbname);

	if($mysqli -> connect_errno):
		echo "Error al conec".$mysqli->connect_error;
	endif;
?>