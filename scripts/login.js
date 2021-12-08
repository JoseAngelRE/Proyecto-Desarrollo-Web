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

let flag = true;

const formLogin = document.getElementById("btnIniciarLogin");
const formRegistrar = document.getElementById("btnIniciarRegistro");
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
  flag = false;
}

function mostrarExito(input) {
  const formControl = input.parentElement;
  formControl.className = "campo-formulario success";
  flag = true;
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

let mensaje = "";
formLogin.addEventListener("click", function (e) {
  e.preventDefault();
  checarRequeridos([email, password]);
  emailValido(email);
  checarLongitud(password, 8, 20);
  

  if (flag) {
    document.getElementById("iniciarSesion").submit();
  }
});

formRegistrar.addEventListener("click", function (e) {
  e.preventDefault();
  ajax("post", '../backendcodigo/procesarNuevo.php', username.value, emailRegistro.value ,passwordRegistro.value, password2.value);

});

const xhttp = new XMLHttpRequest();

function ajax(method, url, username, email, password, password2) {
  xhttp.onreadystatechange = alertContents;
  if (method == 'post') {
    xhttp.open(method, url);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('username=' + encodeURIComponent(username) + '&email=' +
        encodeURIComponent(email) +'&password=' + encodeURIComponent(password) + '&password2=' + encodeURIComponent(password2));
  }
}

function alertContents() {
  if (xhttp.readyState === XMLHttpRequest.DONE) {
    if (xhttp.status === 200) {
      var response = JSON.parse(xhttp.responseText);
      username.value = response.username;
      emailRegistro.value = response.email;
      passwordRegistro.value = response.password;
      password2.value = response.password2;
      verificar();
    } else {
      alert('There was a problem with the request.');
    }
  }
}



function verificar() {
  checarRequeridos([username, emailRegistro, passwordRegistro, password2]);
  checarLongitud(username, 3, 15);
  emailValido(emailRegistro);
  checarLongitud(passwordRegistro, 8, 25);
  passwordsCoinciden(passwordRegistro, password2);

  if (flag) {
    document.getElementById("registrar").submit();
  }
}
