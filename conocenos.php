<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="es" >
	<head>
		<title>.:DRAM:.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Cabecera -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Bienvenido a<span> DRAM</span></a></div>
				<a href="#menu"><?php if(isset($_SESSION['user_username'])):?>
				<?php print $_SESSION['user_username']; ?></a>
				<?php else:?>Menu
				<?php endif;?>
			</header>

		<!-- Menu de navegacion -->
			<nav id="menu">
				<ul class="links">
				<li><a href="index.php">Inicio</a></li>
				<?php if(!isset($_SESSION['user_id'])):?>
					<li><a href="assets/formulario de registro/index.php">Registrate</a></li>
					<li><a href="assets/formulario de acceso/index.php">Accede</a></li>
					<li><a href="conocenos.php">Conoce la empresa</a></li>
					<?php else:?>
					<li><a href="cpu.php">Nuevos desarrollos</a></li>
					<li><a href="enseñanzas.php">¿Quieres aprender?</a></li>
					<li><a href="perfil.php">Mi perfil/datos(AplicacionBD)</a></li>
					<li><a href="contactar.php">Ayuda</a></li>
					<li><a href="assets/php/logout.php">Desconectar usuario</a></li>
					<?php endif;?>
				</ul>
			</nav>

		<!-- Introduccion -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Porque nosotros no ocultamos nada</p>
						<h2>Porque DRAM es totalmente transparente</h2>
					</header>
				</div>
			</section>

		<!-- Cuerpo del texto -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Somos una empresa que busca avanzar al futuro</p>
								<h2>Con vosotros</h2>
							</header>
							<p>Somos una empresa la cual sus inicios se remonta hacia el año 1852, por aquel entonces fabricamos nuestro primer ordenador personal en las fabricas del cerro blanco, todo era con piezas de la mas alta calidad posible.</p>
							<p>Actualmente vivimos en una era de riquezas debido a la gran innovacion que hemos supuesto en nuestro mercado, podriamos decir que ninguna empresa es capaz de superarnos pero todo esto es gracias a vosotros que siempre estais dispuesto a seguirno sin ningun tipo de queja ni dudas. A continuacion pondremos una breve descripcion de la zona donde se creo esta empresa.</p>
							<p>Dos Hermanas es una ciudad y municipio español perteneciente a la provincia de Sevilla en la Comunidad Autónoma de Andalucía (España) y ubicada en la comarca del Área metropolitana de Sevilla. Geográficamente se encuentra situada en la depresión del río Guadalquivir.
								El día 1 de enero de 2016 contaba con 131.855 habitantes censados y por tanto es la novena de las doce ciudades andaluzas que superan los cien mil habitantes, ocupando el puesto 48 en el conjunto de España. Su extensión es de 160,52 km² ,2​ tiene una densidad de 821,42 hab/km² y se encuentra situada a una altitud media de 42 msnm. En los últimos 40 años ha tenido un fuerte crecimiento demográfico (en 1970 solo tenía 39.677 habitantes), debido a su cercanía a la capital y a su actividad industrial.3​ Según la pirámide de población correspondiente a 2007, su población es mayoritariamente joven, en contraste con las distribuciones de población de otras ciudades españolas que tienen una población mucho más envejecida.
								El municipio comprende cuatro núcleos de población separados; Dos Hermanas (centro), Fuente del Rey, Marisma y Puntales - Adriano y Montequinto.
								En diciembre de 2013 el Parlamento de Andalucía, lo declaró Municipio de gran población.</p></div>
					</div>
				</div>
			</section>

		<!-- Pie de pagina -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/DRAMSA231" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/DRAMSA231" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/DRAMSA231/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="mailto:DRAM@dram.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; DRAM. Todos los derechos reservados.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/javascript/jquery.min.js"></script>
			<script src="assets/javascript/jquery.scrollex.min.js"></script>
			<script src="assets/javascript/skel.min.js"></script>
			<script src="assets/javascript/util.js"></script>
			<script src="assets/javascript/main.js"></script>

	</body>
</html>