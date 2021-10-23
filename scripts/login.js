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
};

document.querySelector("#linkLogin a").onclick = () => {
  event.preventDefault();
  document.getElementById("registrar").classList.add("form-hidden");
  document.getElementById("iniciarSesion").classList.remove("form-hidden");
};
