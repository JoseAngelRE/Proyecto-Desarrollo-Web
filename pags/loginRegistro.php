<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto DAW</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/5d433e8279.js"
      crossorigin="anonymous"
    ></script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css" />
    <link rel="stylesheet" href="../estilos/login.css" />
    <script src="/scripts/cookies.js"> </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a href="/index.html" class="navbar-brand"><h1>I-M-C-uídate</h1></a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link cosa" href="../index.html">HOME</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="recetaMenu.html">Recetas</a>
          </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="cuidate.html">Cuídate</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="padecimientos.html">Padecimientos</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="imcPagina.html">Calcula tu IMC</a>
            </li>
            <li class="nav-item cosa"> 
              <a class="nav-link" href="perfil.html">Perfil</a>
          </li>
            <li class="nav-item cosa">
              <a class="nav-link activa" href="loginRegistro.html"
                >Registrate/Iniciar Sesión</a
              >
              <li>
                <a class="nav-link"><button class="button" onclick="cambiartema()">Cambiar tema</button></a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="contenedor-principal">
      <section class="contenedor-titulos">
        <input type="radio" name="slide" id="login" checked />
        <input type="radio" name="slide" id="signup" />
        <label for="login" class="slide login">Inicia sesión</label>
        <label for="signup" class="slide signup">Registrate</label>
        <div class="slider-tab"></div>
      </section>
      <section class="contenedor-form">
        <form class="form" id="iniciarSesion">
          <h2>Inicia sesión</h2>

          <section class="campo-formulario">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Correo electronico"
              autofocus
            />
            <small>Mensaje error</small>
          </section>
          <section class="campo-formulario">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Contraseña"
            />
            <small>Mensaje error</small>
          </section>
          <input type="submit" class="btnForm" value="Iniciar sesión" />
          <section class="form-link" id="linkRegistrar">
            No estas registrado? <a href="">Registrate</a>
          </section>
        </form>
        <form class="form form-hidden" id="registrar">
          <h2>Crea una cuenta</h2>
          <section class="campo-formulario">
            <input
              type="text"
              name="nombreUsuario"
              id="nombreUsuario"
              placeholder="Nombre de usuario"
              autofocus
            />
            <small>Mensaje error</small>
          </section>
          <section class="campo-formulario">
            <input
              type="email"
              name="email"
              id="emailRegistro"
              placeholder="Correo electronico"
              autofocus
            />
            <small>Mensaje error</small>
          </section>
          <section class="campo-formulario">
            <input
              type="password"
              name="password"
              id="passwordRegistro"
              placeholder="Contraseña"
            />
            <small>Mensaje error</small>
          </section>
          <section class="campo-formulario">
            <input
              type="password"
              name="password2"
              id="password2Registro"
              placeholder="Confirmar contraseña"
            />
            <small>Mensaje error</small>
          </section>
          <input type="submit" class="btnForm" value="Registrarte" />
          <section class="form-link" id="linkLogin">
            Ya tienes una cuenta? <a href="">Inicia sesión</a>
          </section>
        </form>
      </section>
    </main>

     <!--COPIAR ESTO-->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Contáctanos:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://github.com/JoseAngelRE/Proyecto-Desarrollo-Web" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>I-M-C-uidate
          </h6>
          <p>
            Universidad Autónoma de Yucatán
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
              Integrantes
          </h6>
          <p>
            <a href="#!" class="text-reset">Daniel Salvador Amaya Tapia</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Jesús Andrei Torres Landero</a>
          </p>
          <p>
            <a href="#!" class="text-reset">José Fernando Chan Dzib</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Alexis Ivan Ake Vela</a>
          </p>
          <p>
              <a href="#!" class="text-reset">José Ángel Ruiz Escalante</a>
            </p>
        </div>

      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">IMCuidate.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <div id="button-up">
      <i class="fas fa-chevron-up"></i>
  </div>
  <script src="/scripts/botonArriba.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script src="../scripts/login.js"></script>
  </body>
</html>
