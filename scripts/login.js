const btnIniciarSesion = document.getElementById('iniciarSesion');

const btnRegistrar = document.getElementById('registrate');

btnRegistrar.onclick = () => {
    document.getElementById('iniciar').className = "esconder";
    if ( document.getElementById('registrar').className === "esconder") {
        document.getElementById('registrar').className = "form";
    }
}

btnIniciarSesion.onclick = () => {
    document.getElementById('registrar').className = "esconder";
    if ( document.getElementById('iniciar').className === "esconder") {
        document.getElementById('iniciar').className = "form";
    }
}
