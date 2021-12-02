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
    <title>Lomo de cerdo con champiñones</title>
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
              <a class="nav-link cosa" href="../../index.html">HOME</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link activa" href="../recetaMenu.html">Recetas</a>
          </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../cuidate.html">Cuídate</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../padecimientos.html">Padecimientos</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../imcPagina.html">Calcula tu IMC</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../perfil.html">Perfil</a>
            </li>
            <li class="nav-item cosa">
              <a class="nav-link" href="../loginRegistro.html"
                >Registrate/Iniciar Sesión</a
              >
            </li>
            <li>
              <a class="nav-link"><button class="button" onclick="cambiartema()">Cambiar tema</button></a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <article class="contenido-P">
      <h1>Lomo de cerdo con champiñones</h1>
      <h4 class="enlaces-recetas">
        <a href="../recetaMenu.html">Recetas</a> >
        <a href="#">Lomo de cerdo con champiñones</a>
      </h4>
      <section class="barra-recetas">
        <ul class="nav-recetas">
          <li><i class="bi bi-alarm"></i>60 minutos</li>
          <li id="descargarBtn">
            <i class="bi bi-cloud-arrow-down"></i>Descargar
          </li>
          <li id="imprimirBtn"><i class="bi bi-printer"></i>Imprimir</li>
        </ul>
      </section>
      <img
        src="../../recursos/imgs/recetasimgs/lomo-cerdo.jpg"
        alt="tabla-vegetal"
      />
      <section class="contenido-receta">
        <h1 id="nombreReceta">Lomo de cerdo con champiñones</h1>
        <p>
          Alimento estrella: Los hongos mixtos son ricos en aminoácidos
          necesarios para aumentar masa muscular, además son ricos en potasio y
          magnesio que favorecen el sistema nervioso.
        </p>

        <section class="ingredientes-datos">
          <section class="ingredientes">
            <h3>Ingredientes</h3>
            <ul>
              <li>1 kg de lomo de cerdo.</li>
              <li>3 tazas de hongos mixtos.</li>
              <li>1 cebolla rebanada.</li>
              <li>2 tazas de consomé de res.</li>
              <li>Sal y pimienta.</li>
              <li>1 ramita de tomillo.</li>
              <li>1 taza de crema light.</li>
              <li>3 cdas. de aceite de oliva.</li>
              <li>1 cda. de aceite extra virgen.</li>
            </ul>
          </section>
          <section class="datos">
            <h4>Valor nutritivo por porción</h4>
            <hr class="lineaDatos" />
            <ul>
              <li>424 kcal</li>
              <hr />
              <li>26 de grasas</li>
              <hr />
              <li>42 de proteínas</li>
              <hr />
              <li>5 hidratos de carbono</li>
            </ul>
          </section>
        </section>
        <section class="preparacion">
          <h3>Preparación</h3>
          <ol>
            <li>
              Limpia la carne, retirando toda la grasa que sea posible. Sazona
              con sal y pimienta. Puedes envolver el lomo en hilo para cocinar o
              de cáñamo para darle más firmeza y que no pierda su forma al
              cocinar.
            </li>
            <li>
              En una olla gruesa calienta aceite de Oliva, cuando esté muy
              caliente, fríe la carne para sellar y quede el lomo dorado por
              todos lados. Retira la carne de la olla y reserva.
            </li>
            <li>
              En la misma olla con el aceite, fríe la cebolla hasta que esté
              transparente, añade los hongos y fríe por unos minutos.
            </li>
            <li>
              Regresa el lomo a la olla. Agrega el caldo de res y el tomillo,
              cocina hasta que la carne esté suave. Cuando esto suceda retira la
              carne de la olla. Rebana y mantén caliente.
            </li>
            <li>
              Licúa una taza de caldo de res donde se está cociendo el lomo con
              la taza de crema y regresa a la olla, sigue cocinando 15 minutos
              más. Justo para servir añade a la salsa una cucharada de  aceite extra Virgen.
            </li>
            <li>
              Sirve la carne rebanada acompañada de la salsa de champiñones.
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
