with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("No has escrito un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Debe escribir su nombre completo");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Escribe un correo electronico para continuar");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("La contraseña no ha sido introducida");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Confirme su contraseña por favor");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Las contraseñas no coinciden, escribelas de nuevo.");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
