const btnLogin = document.getElementById("login");
const btnRegistrar = document.getElementById("signup");

btnLogin.onclick = () => {
  document.getElementById("registrar").classList.add("form-hidden");
  document.getElementById("iniciarSesion").classList.remove("form-hidden");
};

btnRegistrar.onclick = () => {
  document.getElementById("iniciarSesion").classList.add("form-hidden");
  document.getElementById("registrar").classList.remove("form-hidden");
};

document.querySelector("#linkRegistrar a").onclick = () => {
  event.preventDefault();
  document.getElementById("iniciarSesion").classList.add("form-hidden");
  document.getElementById("registrar").classList.remove("form-hidden");
  document.getElementById("signup").checked = true;
};

document.querySelector("#linkLogin a").onclick = () => {
  event.preventDefault();
  document.getElementById("registrar").classList.add("form-hidden");
  document.getElementById("iniciarSesion").classList.remove("form-hidden");
  document.getElementById("login").checked = true;
};


const formLogin = document.getElementById('iniciarSesion');
const formRegistrar = document.getElementById('registrar');
const emailRegistro = document.getElementById('emailRegistro');
const passwordRegistro = document.getElementById('passwordRegistro');
const username = document.getElementById('nombreUsuario');
const email = document.getElementById('email');
const password = document.getElementById('password');

// Show input error message
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'campo-formulario error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

// Show success outline
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'campo-formulario success';
}




//TODO Validar los datos y mostrar mensajes de error, o si fue exitoso el registro o login
formLogin.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log("Submiting login data");
    console.log(email.value);
    console.log(password.value);
});

formRegistrar.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log("Submiting register data");
    console.log(username.value);
    console.log(emailRegistro.value);
    console.log(passwordRegistro.value);
});