
<?php error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto DAW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5d433e8279.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/index.css">
    
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
              <a class="nav-link cosa activa" href="#">HOME</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="pags/recetaMenu.php">Recetas</a>
          </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="pags/cuidate.php">Cuídate</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="pags/padecimientos.php">Padecimientos</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="pags/imcPagina.php">Calcula tu IMC</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="pags/perfil.php">Perfil</a>
            </li>
              <?php
              session_start();
              error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
              if ($_SESSION["autentificado"]) {
                  echo "<li class=\"nav-item cosa\">
                  <a class=\"nav-link\" href=\"backendcodigo/salir.php\">Cerrar sesión</a>
              </li>";
              }

              if (!isset($_SESSION["autentificado"])) {
                  echo "<li class=\"nav-item cosa\">
              <a class=\"nav-link\" href=\"pags/loginRegistro.php\">Registrate/Iniciar Sesión</a>
            </li>";
              }
              ?>
          </ul>
        </div>
      </div>
    </nav>

    <header>
        <section class="hero">
            <h1 class="hero-parrafo">
                <p>"La obesidad no se debe simplemente a la falta de voluntad de un individuo."</p>
            </h1>
        </section>
    </header>

    <main>
        <section class="problematica">
            <article class="img-problematica">
                <div class="problematica-parrafo">
                    <p>Algunas causas de la obesidad</p>
                    <p>Aunque existen diferentes factores relacionados con el aumento en el
                        índice de masa corporal y sus repercusiones en el cuerpo humano, los
                        más vinculados al estilo de vida en México son:</p>
                </div>
            </article>
            <article class="barra-circulos">
                <div class="large material-icons circulo-informativo">favorite</div>
                <div class="large material-icons circulo-informativo">hotel</div>
                <div class="large material-icons circulo-informativo">free_breakfast</div>
                <div class="large material-icons circulo-informativo">mood</div>
            </article>
        </section>

        <section class="sec-article-img consultar">
            <img src="recursos/imgs/index-imgs/tomando-talla.jpg" alt="">
            <article>
                <p>¿Cuándo debes consultar con un médico?</p>
                <p>Si te preocupan los problemas de salud relacionados con el peso, pregunta al médico sobre el control de la obesidad. Con tu médico, podrán evaluar los riesgos para tu salud y analizar tus opciones para bajar de peso.</p>
            </article>
        </section>
        
        <section class="sec-article-img segundo">
            <article>
                <p>Calidad de vida</p>
                <p>La obesidad puede disminuir tu calidad de vida en general. Es posible que no puedas hacer cosas que hacías antes, como participar en actividades placenteras. Tal vez evites los lugares públicos. Las personas con obesidad pueden incluso sufrir discriminación.</p>
            </article>
            <img src="recursos/imgs/index-imgs/calidad-vida.jpg" alt="">
        </section>

        <section class="tercero">
            <article class="mitos">
                <div class="titulo">
                    <h3>Mitos sobre la obesidad</h3>
                </div>
                <ul class="lista-mitos">
                    <li>
                        <p>1) Para reducir la obesidad, coma menos y muévase más.</p>
                    </li>
                    <li>
                        <p>2) La obesidad causa diabetes.</p>
                    </li>
                    <li>
                        <p>3) Las personas con obesidad son vagas.</p>
                    </li>
                    <li>
                        <p>4) Si tienes familiares con obesidad, también podrías tenerla.</p>
                    </li>
                    <li>
                        <p>5) La obesidad no afecta a la salud.</p>
                    </li>
                </ul>
            </article>
        </section>
    </main>
    <div id="button-up">
      <i class="fas fa-chevron-up"></i>
    </div>

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

    <script src="scripts/botonArriba.js"></script>
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
  </body>
</html>
