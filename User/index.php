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
	<meta charset="utf-8">
	<title>	CityView</title>
	<link rel="stylesheet" type ="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.2-web\css\all.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="control.js"></script>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a id="homebtn" href="#inicio"><span class="fas fa-home"></span><span class="tab-text"> Inicio</span></a></li>
				<li><a href="#lugares"><span class="fas fa-binoculars"></span><span class="tab-text"> Lugares</span></a></li>
				<li><a href="#contacto"><span class="fas fa-child"></span><span class="tab-text"> Contacto</span></a></li>
			</ul>
			<div class="logo">
				<img src="logo.png">
			</div>
			<div class="slogan">
				<h2>Explora.Observa.Visita</h2>
			</div>
		</div>
	</header>

	<div class="botonc"><a href="#"><span class="far fa-arrow-alt-circle-up"></span></a></div>
	<div class="botonSesion"><a href="salir.php"><span class="fas fa-door-open"></span></a></div>
	<div class="botonConfig"><a href="userConf.php"><span class="fas fa-user-cog"></span></a></div>
	

	<div class="secciones">
		<article id="inicio">
			<div class="world">
				<img src="world.png">
			</div>
			<h1>¡Bienvenido Viajero!</h1>
			<div id="pinicio">
			<p>Sabemos que al viajar a un nuevo destino, nunca es fácil encontrar los mejores sitios para visitar, para conocer la cultura y las tradiciones del lugar o degustar de la gastronomía típica local; de esa premisa surge CityView, una plataforma en donde podrás encontrar lo que estás buscando para hacer de tu viaje una experiencia inolvidable en la hermosa ciudad colonial Sn. Fco de Campeche. ¿Estás listo para comenzar tu aventura?</p>
			</div>
		</article>

		<article id="lugares">
			<div id="malecon">
				<a href="#lugares"><h1>Malecón</h1></a>
			</div>
			<div id="centro">
				<a href="#lugares"><h1>Centro Histórico</h1></a>
			</div>
			<div id="baluarte">
				<a href="#lugares"><h1>Baluarte de San Jose</h1></a>
			</div>
		</article>

		<article id="contacto">
			<div id="foto">
				<img src="yo.jpg">
			</div>
			<div id="pinicio">
				<p>Mi nombre es Andrés Mass, creador de CityView, estudiante de la facultad de ingeniería de la universidad autónoma de campeche, amante de la tecnología, la buena música y de tu sonrisa bb. Dicen que eres lo que consumes, por eso soy un crack.</p>
				<ul id="contactolist">
					<li><a href="https://www.facebook.com/andres.eli.mass"><span class="fab fa-facebook-square"></span></a></li>
					<li><a href="https://twitter.com/andymass_"><span class="fab fa-twitter-square"></span></a></li>
					<li><a href="https://www.instagram.com/andymass_/"><span class="fab fa-instagram"></span></a></li>
				</ul>
			</div>
		</article>
	</div>
</body>
</html>