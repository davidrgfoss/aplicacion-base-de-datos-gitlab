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
					<li><a href="cpu.php">Nuevos desarrollos</a></li>
					<li><a href="enseñanzas.php">¿Quieres aprender?</a></li>
					<li><a href="perfil.php">Mi perfil/datos(AplicacionBD)</a></li>
					<li><a href="assets/php/logout.php">Desconectar usuario</a></li>
					<?php endif;?>
				</ul>
			</nav>

		<!-- Soporte -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Si necesitas ayuda nosotros estamos aqui</p>
						<h2>¡Junto a ti!</h2>
					</header>
				</div>
			</section>

		<!-- Formulario -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

								<form method="post" action="http://dit.gonzalonazareno.org/iesgn/resultado.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Nombre" id="Nombre" value="" placeholder="Escribe tu Nombre" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="Correo" id="Correo" value="" placeholder="Escribe tu correo electronico" />
										</div>
										<!-- Separacion -->
										<div class="12u$">
											<div class="select-wrapper">
												<select name="Categoria de incidencia" id="category">
													<option value="No se ha escogido">Departamento</option>
													<option value="Compras/dudas">Compras/dudas</option>
													<option value="Garantia/RMA">Garantia/RMA</option>
													<option value="Soporte Tecnico">Soporte Tecnico</option>
													<option value="Reclamaciones">Reclamaciones</option>
												</select>
											</div>
										</div>
										<!-- Separacion -->
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-low" name="Prioridad" value="Prioridad Baja" checked>
											<label for="priority-low">Baja prioridad</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" value="Prioridad Media" name="Prioridad">
											<label for="priority-normal">Prioridad media</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" id="priority-high" value="Prioridad alta" name="Prioridad">
											<label for="priority-high">Muy urgente</label>
										</div>
										<!-- Separacion -->
										<div class="6u 12u$(small)">
											<input type="checkbox" id="copy" name="Copiar mensaje" value="Si" checked>
											<label for="copy">Enviar una copia de este mensaje a tu email</label>
										</div>
										<div class="6u$ 12u$(small)">
											<input type="checkbox" id="human" name="Eres humano" value="Si">
											<label for="human">Marca esta casilla para confirmar que eres humano</label>
										</div>
										<!-- Separacion -->
										<div class="12u$">
											<textarea name="Mensaje" id="Mensaje" placeholder="Escribe aqui tu mensaje" rows="6"></textarea>
										</div>
										<!-- Separacion -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Enviar mensaje" /></li>
												<li><input type="reset" value="Borrar todo" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form></div>
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