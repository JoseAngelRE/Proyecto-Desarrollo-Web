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
    <title>Pizza pesto margarita</title>
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
      <h1>Pizza pesto margarita</h1>
      <h4 class="enlaces-recetas">
        <a href="../recetaMenu.php">Recetas</a> >
        <a href="#">Pizza pesto margarita</a>
      </h4>
      <section class="barra-recetas">
        <ul class="nav-recetas">
          <li><i class="bi bi-alarm"></i>30 minutos</li>
          <li id="descargarBtn">
            <i class="bi bi-cloud-arrow-down"></i>Descargar
          </li>
          <li id="imprimirBtn"><i class="bi bi-printer"></i>Imprimir</li>
        </ul>
      </section>
      <img src="../../recursos/imgs/recetasimgs/pizza-pesto-margarita.jpg" alt="tabla-vegetal" />
      <section class="contenido-receta">
        <h1 id="nombreReceta">Pizza pesto margarita</h1>
        <p>
          Alimento estrella arúgula: La arúgula es rica en antioxidantes, fibra
          que mejora la digestión, además de hierro y folatos que favorecen la
          circulación.
        </p>

        <p>
          Un delicioso platillo para tus comensales sin dejar de lado los
          beneficios para su organismo.
        </p>
        <section class="ingredientes-datos">
          <section class="ingredientes">
            <h3>Ingredientes</h3>
            <ul>
              <h4>Para la masa:</h4>
              <li>250 g de harina</li>
              <li>2 de levadura</li>
              <li><sup>3</sup>/<sub>4</sub> de taza de agua.</li>
              <li>3 cucharadas de aceite de oliva.</li>
              <li>5 g de sal.</li>
            </ul>
            <ul>
              <h4>Para el pesto:</h4>
              <li>50 g de hojas de albahaca</li>
              <li><sup>1</sup>/<sub>2</sub> de taza de aceite de oliva.</li>
              <li><sup>1</sup>/<sub>2</sub> de taza de queso parmesano.</li>
              <li>25 g de piñones tostados.</li>
              <li>4 dientes de ajo.</li>
              <li>1 pizca de sal de mar.</li>
            </ul>
            <ul>
              <h4>Para el topping:</h4>
              <li>200 g de queso mozzarella reducido en grasa.</li>
              <li>1 jitomate bola rebanado.</li>
              <li>4 tazas de arúgula.</li>
              <li><sup>1</sup>/<sub>2</sub> taza de vinagre balsámico.</li>
              <li><sup>1</sup>/<sub>2</sub> taza de aceite de oliva.</li>
              <li>2 cdas. de crema de vinagre balsámico.</li>
              <li>Sal y pimienta.</li>
            </ul>
          </section>
          <section class="datos">
            <h4>Valor nutritivo por porción</h4>
            <hr class="lineaDatos" />
            <ul>
              <li>539 kcal</li>
              <hr />
              <li>43 de grasas</li>
              <hr />
              <li>15 de proteínas</li>
              <hr />
              <li>23 hidratos de carbono</li>
            </ul>
          </section>
        </section>
        <section class="preparacion">
          <h3>Preparación</h3>
          <ol>
            <li>
              Mezcla los ingredientes para la masa en un tazón y deja reposar
              por 2 horas. Pasado este tiempo mezcla y dejas reposar nuevamente.
              Repite cada 2 horas de 3 a 4 veces el mismo procedimiento.
            </li>
            <li>
              Divide la masa en dos partes, forma una bola con cada porción,
              coloca en un tazón y barniza con aceite de oliva para que no se
              pegue, cubre y refrigera toda la noche.
            </li>
            <li>
              Al día siguiente extiende la masa con las manos, estira y forma
              las pizzas sobre las charolas para el horno.
            </li>
            <li>
              Para hacer el pesto muele en un procesador la albahaca, el piñón,
              el ajo, el queso parmesano y la sal. Vierte Oli de Nutrioli®
              Aceite de Oliva en forma de hilo y poco a poco hasta quedar una
              mezcla homogeneizada.
            </li>
            <li>
              Unta las pizzas con el pesto, agrega el queso mozzarella, coloca
              las rebanadas de jitomates sobre las pizzas, hornea a 220&#176; C
              por 20 minutos y retira del horno.
            </li>
           <li>En un tazón mezcla la arúgula, el vinagre balsámico y aceite extra virgen, sazona con sal y pimienta. Agrega la crema de vinagre balsámico y finalmente la arúgula marinada. Sirve de inmediato.</li>
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
