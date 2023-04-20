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
				<a href="#menu"><?php if(isset($_SESSION["user_username"])):?>
				<?php print $_SESSION["user_username"]; ?></a>
				<?php else:?>Menu
				<?php endif;?>
			</header>

		<!-- Menu de navegacion -->
			<nav id="menu">
				<ul class="links">
				<li><a href="index.php">Inicio</a></li>
				<?php if(!isset($_SESSION["user_id"])):?>
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

		<!-- Imagenes de la empresa -->
			<section class="banner full">
				<article>
					<img src="assets/images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Bienvenido a la nueva era</p>
							<h2>DRAM</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="assets/images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Si algo nos hace especial es</p>
							<h2>Nuestro diseño</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="assets/images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p><a href="conocenos.php">Si quieres conocer nuestra empresa es facil</a></p>
							<h2>Somos unicos</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="assets/images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Algunos nos llaman locos por ofrecer tan barato</p>
							<h2>Tanta calidad</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="assets/images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>3 meses de garantia para nuestros productos</p>
							<h2>Increible</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- Descripcion de la empresa -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="assets/images/profesionales.jpg" alt="imagen profesional" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Profesionales con años de experiencia buscando siempre</p>
										<h2>La innovacion en el desarrollo</h2>
									</header>
									<p>En nuestra empresa siempre encontraremos personas dispuesta a innovar y desarrollar sus propios sueños o ideas.
									Como vemos en la foto nuestro jefe en el proyecto de la CPU DRAM X9 esta trabajando en la nueva arquitectura que nos permite crear un procesador de 7,5 nucleos,
									algo que nos permitira avanzar hacia el futuro junto a vosotros.</p>
									<footer class="align-center">
										<a href="cpu.php" class="button alt">Seguir leyendo</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="assets/images/colegios.jpg" alt="imagen de enseñanza" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>La enseñanza a las futuras generaciones</p>
										<h2>Porque nos gusta ayudar a todos</h2>
									</header>
									<p>Si algo tenemos claro es que debemos potenciar la enseñanza para las proximas generaciones, por eso mismo
									tenemos nuestros cursos para formar a docentes capaces de enseñar como usar un ordenador iDram a las nuevas generaciones.
									Gracias a nuestra iniciativa podemos ver en las escuelas a niños/as aprendiendo a usar los iDram como profesionales.</p>
									<footer class="align-center">
										<a href="enseñanzas.php" class="button alt">Seguir leyendo</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Mini descripcion de la empresa -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Todos buscan el secreto que hay detras de los ordenadores DRAM pero nosotros no lo ocultamos y siempre diremos lo mismo, nuestro secreto son nuestros clientes.</p>
						<h2>Nuestro mayor logro sois vosotros. <strong>GRACIAS</strong></h2>
					</header>
				</div>
			</section>

		<!-- Galeria de imagenes -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">A continuacion veremos algunas imagenes referente a nuestra empresa
						donde veremos algunos productos como <strong><em>MineDram</em></strong> o nuestro mini pc <em><strong>RaspDram</strong> Dramberry 7X</em>. Tambien veremos iniciativas solidarias creada por nosotros para vosotros.
						 <h2>Todos somos DRAM.</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="assets/images/minedram.PNG" target="_blank"><img src="assets/images/minedram.PNG" alt="Software de la empresa DRAM" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="assets/images/raspDram.jpg" target="_blank"><img src="assets/images/raspDram.jpg" alt="Hardware de DRAM" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="assets/images/formacione.jpg" target="_blank"><img src="assets/images/formacione.jpg" alt="Formando a nuevos empleados en DRAM" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="assets/images/starw.jpg" target="_blank"><img src="assets/images/starw.jpg" alt="Imagen de cursos impartidos por DRAM" /></a>
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