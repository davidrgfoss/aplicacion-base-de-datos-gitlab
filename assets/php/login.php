<?php

if(!empty($_POST)){
	if(isset($_POST['username']) &&isset($_POST['password'])){
		if($_POST['username']!=""&&$_POST['password']!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql= "select * from user2 where username='".pg_escape_string($_POST['username'])."' and password='".pg_escape_string($_POST['password'])."'";
			$query = pg_query ($dbconex,$sql);
			$check= pg_num_rows($query);
			while ($r=pg_fetch_array($query,null)) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"No has introducido los datos correctamente.\");window.location='../formulario de acceso/index.php';</script>";
			}else{
				session_start();
				$_SESSION['user_id']=$user_id;
				$_SESSION['user_username']=$_POST['username'];
				print "<script>window.location='../../index.php';</script>";				
			}
		}
	}
}



?>