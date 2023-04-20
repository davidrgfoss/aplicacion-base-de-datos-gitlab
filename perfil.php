<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Necesitas estar registrado para acceder!\");window.location='index.php';</script>";
}

include "assets/php/conexion.php";
$consulta= "select * from user2 where username='".pg_escape_string($_SESSION['user_username'])."'";
$datos=pg_query($dbconex,$consulta);
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
					<li><a href="conocenos.php">Conoce la empresa</a></li>
					<li><a href="contactar.php">Ayuda</a></li>
					<li><a href="assets/php/logout.php">Desconectar usuario</a></li>
					<?php endif;?>
				</ul>
			</nav>

		<!-- Titulo principal -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Bienvenido/a <?php print $_SESSION['user_username']; ?></a></p>
						<h2>Esta es tu area personal.</h2>
					</header>
				</div>
			</section>

		<!-- Explicacion -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<p>A continuación veras una tabla con su información personal</p>
							<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Identificación</th>
												<th>Nombre real completo</th>
												<th>Nombre de usuario</th>
												<th>Correo electronico</th>
												<th>Contraseña</th>
												<th>Fecha de creación del perfil</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<?php
												while($x=pg_fetch_array($datos,null,PGSQL_ASSOC)){
													foreach ($x as $valor) {
														echo "<td>$valor</td>\n";
													}
												}
											?>
											</tr>
										</tbody>
									</table>
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