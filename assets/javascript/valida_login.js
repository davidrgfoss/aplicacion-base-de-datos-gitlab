with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Por favor rellene la casilla de usuario/email");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Por favor rellene la casilla de usuario/email");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
		