<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql= "select * from user2 where username='".pg_escape_string($_POST['username'])."' or email='".pg_escape_string($_POST['email'])."'";
			$query = pg_query ($dbconex,$sql);
			while ($r=pg_fetch_array($query,null)) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='/assets/formulario de registro/index.php';</script>";
			}
			else{
			$sql = "insert into user2(username,fullname,email,password,create_at) values ('".$_POST['username']."','".$_POST['fullname']."','".$_POST['email']."','".$_POST['password']."',NOW())";
			$query = pg_query ($dbconex,$sql);
			if($query!=null){
				print "<script>alert(\"Registrado correctamente, Bienvenido a DRAM\");window.location='../../index.php';</script>";
			}
			}
		}
	}
}



?>