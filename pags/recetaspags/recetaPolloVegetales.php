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
    <script src="../../scripts/cookiesRecetas.js"> </script>
    <title>Pollo con vegetales a la parrilla</title>
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
      <h1>Pollo con vegetales a la parrilla</h1>
      <h4 class="enlaces-recetas">
        <a href="../recetaMenu.php">Recetas</a> >
        <a href="#">Pollo con vegetales a la parrilla</a>
      </h4>
      <section class="barra-recetas">
        <ul class="nav-recetas">
          <li><i class="bi bi-alarm"></i>35 minutos</li>
          <li id="descargarBtn">
            <i class="bi bi-cloud-arrow-down"></i>Descargar
          </li>
          <li id="imprimirBtn"><i class="bi bi-printer"></i>Imprimir</li>
        </ul>
      </section>
      <img
        src="../../recursos/imgs/recetasimgs/pollo-vegetales.jpg"
        alt="tabla-vegetal"
      />
      <section class="contenido-receta">
        <h1 id="nombreReceta">Pollo con vegetales a la parrilla</h1>
        <section class="ingredientes-datos">
          <section class="ingredientes">
            <h3>Ingredientes</h3>
            <ul>
              <h4>Para el marinado:</h4>
              <li><sup>1</sup><sub>4</sub> de taza de jugo de limón.</li>
              <li>4 dientes de ajo triturados.</li>
              <li>1 cucharadita de páprika.</li>
              <li>
                <sup>1</sup><sub>2</sub> cucharadita de hojuelas de chile.
              </li>
              <li>1 cucharada de orégano seco.</li>
              <li>1 cucharadita de sal.</li>
              <li>Pimienta al gusto.</li>
            </ul>
            <ul>
              <h4>Para el pollo:</h4>
              <li>4 medias pechugas de pollo, sin piel y deshuesadas.</li>
              <li>
                2 pimientos morrones de diferentes colores rebanados en fajitas
                gruesas.
              </li>
              <li>1 ramillete de brócoli.</li>
              <li>12-16 piezas de espárragos pelados.</li>
              <li>2-3 calabacitas rebanadas.</li>
              <li>3 cucharadas de aceite de oliva.</li>
            </ul>
          </section>
          <section class="datos">
            <h4>Valor nutritivo por porción</h4>
            <hr class="lineaDatos" />
            <ul>
              <li>258 kcal</li>
              <hr />
              <li>4 de grasas</li>
              <hr />
              <li>5 de proteínas</li>
              <hr />
              <li>57 hidratos de carbono</li>
            </ul>
          </section>
        </section>
        <section class="preparacion">
          <h3>Preparación</h3>
          <ol>
            <li>Sazona el pollo con sal y pimienta.</li>
            <li>
              En un frasco mezcla los ingredientes del marinado, hasta tener una
              mezcla homogénea.
            </li>
            <li>
              Reparte la marinada entre el pollo y las verduras, deja reposar al
              menos por 10 minutos.
            </li>
            <li>
              Esparce la parrilla previamente calentada con 1 cucharada
              de aceite de oliva, cocina el pollo por ambos lados hasta que se cueza por
              dentro y esté dorado por fuera, retira de la parrilla.
            </li>
            <li>
              Vuelve a esparcir la parrilla con 2 cucharadas de aceite y cocina los vegetales sólo el tiempo suficiente para que estén ligeramente cocidos.
            </li>
            <li>Sirve inmediatamente.</li>
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
