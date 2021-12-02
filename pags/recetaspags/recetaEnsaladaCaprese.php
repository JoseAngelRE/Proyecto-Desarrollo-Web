<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link id="principal"rel="stylesheet" href="../../estilos/main.css" />
    <link rel="stylesheet" href="../../estilos/recetaEstilo.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/5d433e8279.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="/scripts/cookies.js"> </script>
    <title>Ensalada caprese</title>
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
              <a class="nav-link cosa" href="../../index.php">HOME</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../recetaMenu.php">Recetas</a>
          </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../cuidate.php">Cuídate</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../padecimientos.php">Padecimientos</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../imcPagina.php">Calcula tu IMC</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../perfil.php">Perfil</a>
            </li>
              <li class="nav-item cosa">
                  <a class="nav-link" href="../../backendcodigo/salir.php">Cerrar sesión</a>
              </li>
            <li>
              <a class="nav-link"><button class="button" onclick="cambiartema()">Cambiar tema</button></a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <article class="contenido-P">
      <h1>Ensalada caprese</h1>
      <h4 class="enlaces-recetas">
        <a href="../recetaMenu.php">Recetas</a> >
        <a href="#">Ensalada caprese</a>
      </h4>
      <section class="barra-recetas">
        <ul class="nav-recetas">
          <li><i class="bi bi-alarm"></i>20 minutos</li>
          <li id="descargarBtn">
            <i class="bi bi-cloud-arrow-down"></i>Descargar
          </li>
          <li id="imprimirBtn"><i class="bi bi-printer"></i>Imprimir</li>
        </ul>
      </section>
      <img
        src="../../recursos/imgs/recetasimgs/receta-de-ensalada-caprese.jpg"
        alt="tabla-vegetal"
      />
      <section class="contenido-receta">
        <h1 id="nombreReceta">Ensalada caprese</h1>
        <p>
          El jitomate es rico en vitamina A, potasio y licopeno, un antioxidante
          que protege a las células de su envejecimiento, favoreciendo también
          el cuidado de la piel.
        </p>
        <section class="ingredientes-datos">
          <section class="ingredientes">
            <h3>Ingredientes</h3>
            <ul>
              <li>4 jitomates bola grandes.</li>
              <li>1 pieza de queso mozzarella fresco (o 40 g por persona)</li>
              <li>1 taza de hojas de albahaca fresca.</li>
              <li>Sal al gusto.</li>
              <li>Pimienta al gusto.</li>
            </ul>

            <ul>
              <h4>Para el aderezo:</h4>
              <li><sup>1</sup><sub>2</sub> de Aceite de Oliva Extra Virgen.</li>
              <li><sup>1</sup><sub>4</sub> de taza de vinagre balsámico.</li>
            </ul>
          </section>
          <section class="datos">
            <h4>Valor nutritivo por porción</h4>
            <hr class="lineaDatos" />
            <ul>
              <li>145 kcal</li>
              <hr />
              <li>10 de grasas</li>
              <hr />
              <li>10 de proteínas</li>
              <hr />
              <li>5 hidratos de carbono</li>
            </ul>
          </section>
        </section>
        <section class="preparacion">
          <h3>Preparación</h3>
          <ol>
            <li>
              Corta el jitomate, en rebanadas delgadas, entre 4 o 5 rebanadas de
              cada jitomate. Corta el queso mozzarella en rebanadas delgadas.
              Coloca los jitomates en el platón que hayas elegido para servir,
              añade encina de cada rebanada de jitomate una rebanada de queso y
              decora con una hoja de albahaca. Repite el proceso. Sazona con sal
              y pimienta.
            </li>
            <li>
              Mezcla el Aceite de Oliva Extra Virgen junto con
              el vinagre balsámico en un pequeño recipiente. Baña esta mezcla
              sobre la ensalada y sirve.
            </li>
          </ol>
        </section>
      </section>
    </article>

    <!--COPIAR ESTO-->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="
          d-flex
          justify-content-center justify-content-lg-between
          p-4
          border-bottom
        "
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Contáctanos:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a
            href="https://github.com/JoseAngelRE/Proyecto-Desarrollo-Web"
            class="me-4 text-reset"
          >
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
              <p>Universidad Autónoma de Yucatán</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Integrantes</h6>
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
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/"
          >IMCuidate.com</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <div id="button-up">
      <i class="fas fa-chevron-up"></i>
    </div>
    <script src="../../scripts/recetaScript.js"></script>
    <script src="../../scripts/botonArriba.js"></script>
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
