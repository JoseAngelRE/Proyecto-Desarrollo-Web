// GESTIÓN DE COOKIES

//Crear cookie
var createCookie =function(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

//Leer cookie
var readCookie=function(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

//Borrar cookie
var eraseCookie =function(name) {
	createCookie(name,"",-1);
}




function cambiartema(){
 if(readCookie("estado")==null){
     createCookie("estado","oscuro")
     document.getElementById('principal').href = '/estilos/temaOscuro.css';
 }else{
    if(readCookie("estado")=="oscuro"){
        document.getElementById('principal').href = '/estilos/main.css';
        createCookie("estado","normal");

    } else{
        document.getElementById('principal').href = '/estilos/temaOscuro.css';
        createCookie("estado","oscuro");

    }   
 }
 
}

window.onload=function() {
    if(readCookie("estado")=="oscuro"){
     document.getElementById('principal').href = '/estilos/temaOscuro.css';
    }
 }

