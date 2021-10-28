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

const formLogin = document.getElementById("iniciarSesion");
const formRegistrar = document.getElementById("registrar");
const emailRegistro = document.getElementById("emailRegistro");
const passwordRegistro = document.getElementById("passwordRegistro");
const username = document.getElementById("nombreUsuario");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2Registro");

function mostrarError(input, message) {
  const formControl = input.parentElement;
  formControl.className = "campo-formulario error";
  const small = formControl.querySelector("small");
  small.innerText = message;
}

function mostrarExito(input) {
  const formControl = input.parentElement;
  formControl.className = "campo-formulario success";
}

function checarRequeridos(array) {
  array.forEach((input) => {
    if (input.value.trim() === "") {
      mostrarError(input, `Este campo es requerido`);
    } else {
      mostrarExito(input);
    }
  });
}

function checarLongitud(input, min, max) {
  if (input.value.length < min) {
    mostrarError(input, `Este campo debe tener al menos ${min} caracteres`);
  } else if (input.value.length > max) {
    mostrarError(input, `Este campo debe tener maximo ${max} caracteres`);
  } else {
    mostrarExito(input);
  }
}

function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function passwordsCoinciden(input1, input2) {
  if (input1.value !== input2.value) {
    mostrarError(input2, "Las contraseñas no coinciden");
  }
}

function emailValido(input) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    mostrarExito(input);
  } else {
    mostrarError(input, "Correo electronico no valido");
  }
}

formLogin.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("Submiting login data");
  checarRequeridos([email, password]);
  emailValido(email);
  checarLongitud(password, 8, 20);
  console.log(email.value);
  console.log(password.value);
});

formRegistrar.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("Submiting register data");
  checarRequeridos([username, emailRegistro, passwordRegistro, password2]);
  checarLongitud(username, 3, 15);
  emailValido(emailRegistro);
  checarLongitud(passwordRegistro, 6, 25);
  passwordsCoinciden(passwordRegistro, password2);
  console.log(emailRegistro.value);
  console.log(passwordRegistro.value);
  console.log(password2.value);
});
