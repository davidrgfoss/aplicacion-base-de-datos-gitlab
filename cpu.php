<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Necesitas estar registrado para acceder!\");window.location='index.php';</script>";
}

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
					<li><a href="enseñanzas.php">¿Quieres aprender?</a></li>
					<li><a href="perfil.php">Mi perfil/datos(AplicacionBD)</a></li>
					<li><a href="contactar.php">Ayuda</a></li>
					<li><a href="assets/php/logout.php">Desconectar usuario</a></li>
					<?php endif;?>
				</ul>
			</nav>

		<!-- Titulo principal -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Nuestra empresa es la principal innovadora</p>
						<h2>Porque todos creen en nosotros</h2>
					</header>
				</div>
			</section>

		<!-- Explicacion -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>¿Os habeis preguntado como funciona un iDRAM?</p>
								<h2>La CPU</h2>
							</header>
							<p>
							<header class="align-center">
									<h2>DRAM X9</h2>
									<p>La mayor creacion de DRAM</p>
								</header>
							</p>
							<p>Nuestros ingenieros desarrollaron una CPU para que fuese posible que los ordenadores iDram ejecutaran cualquier tipo de programa requerido por nuestros usuarios.
							Pongamos algunos ejemplos de lo que hacen nuestras CPU</p>
							<div class="row">
									<div class="6u 12u$(small)">
									<ul class="alt">
											<li>Realizan calculos predictivos para abrir el software que necesitas antes de que lo sepas si quieras.</li>
											<li>Gracias a la multitud de sensores de un iDram es capaz de decirte cuando tienes que ir a dormir o si te ve demasiado cansado.</li>
											<li>Cuando se trata de jugar no hay ningun rival pues cada nucleo tiene alrededor de 50 Pflops de potencia bruta.</li>
										</ul>
									</div>
									<div class="6u$ 12u$(small)">
									<h4>Caracteristicas tecnicas</h4>
										<ol>
											<li><strong>Nucleos</strong>:<em> Actualmente tiene un total de 7,5 nucleos a 17 Ghz</em></li>
											<li><strong>Tamaño</strong>:<em> El tamaño de nuestros procesadores es adaptable pues realmente parte de su tamaño viene vacio por ventilacion.</em></li>
											<li><strong>Consumo electrico</strong>:<em> El consumo electrico de nuestros procesadores corresponde a 7W por mes.</em></li>
											<li><strong>Caracteristicas Gaming</strong>:<em>Sabemos que nuestros seguidores hoy en dia buscan cosas para jugadores, por eso se permite hacer overclock <br /> hasta los 49,9 Ghz sin que se anule la garantia pero no mas.</em></li>
		
										</ol>
								</div>
							</div>
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