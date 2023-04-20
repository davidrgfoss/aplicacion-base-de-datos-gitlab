<?php session_start();
if(isset($_SESSION["user_username"])){
	print "<script>alert(\"Ya te has registrado!\");window.location='../../index.php';</script>";
}

 ?>
<!DOCTYPE HTML>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Registro del usuario</title>
      <link rel="stylesheet" href="css/style.css" />
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet" type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet" type='text/css'>
<link rel="stylesheet" href="../css/main3.css" />
</head>

<body>
<header id="header" class="alt">
				<div class="logo"><a href="../../index.php">Bienvenido a<span> DRAM</span></a></div>
  </header>
<div class="wrapper">
  <h1>Unete a nosotros</h1>
  <p>Con este formulario podras registrar su usuario y asi acceder a los beneficioes del grupo DRAM</p>
  <form role="form" class="form" method="post" name="registro" action="../php/registro.php" />
    <input type="text" class="nombre" name="username" placeholder="Nombre de usuario" />
    <div>
      <p class="nombre-ayuda">Introduzca el nick de usuario que deseas tener</p>
    </div>
	<input type="text" class="usuario" name="fullname" placeholder="Nombre completo" />
	<div>
	  <p class="usuario-ayuda">Introduzca su nombre real completo</p>
	</div>
    <input type="email" class="email" name="email" placeholder="Correo electronico" />
     <div>
      <p class="email-ayuda">Introduzca aqui tu correo electronico.</p>
    </div>
	<input type="password" class="contraseña" name="password" placeholder="Contraseña" />
	<div>
	  <p class="contraseña-ayuda">Introduzca una contraseña que sea segura y no se la digas a nadie nunca. Nuestra empresa nunca pedira los datos a sus clientes</p>
	</div>
	<input type="password" class="contraseña2" name="confirm_password" placeholder="Repita su contraseña" />
	<div>
	  <p class="contraseña2-ayuda">Debes introducir la misma contraseña que has introducido anteriormente.</p>
	</div>
    <input type="submit" class="submit" value="Confirmar">
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
	 <script  src="../javascript/valida_registro.js"></script>
</body>
</html>
