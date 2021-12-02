<!DOCTYPE html>
<html lang="en">
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
    <title>Tabla de vegetales</title>
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
      <h1>Tabla de vegetales</h1>
      <h4 class="enlaces-recetas">
        <a href="../recetaMenu.html">Recetas</a> >
        <a href="#">Tabla de vegetales</a>
      </h4>
      <section class="barra-recetas">
        <ul class="nav-recetas">
            <li><i class="bi bi-alarm"></i>30 minutos</li>
          <li id="descargarBtn"><i class="bi bi-cloud-arrow-down"></i>Descargar</li>
          <li id="imprimirBtn"><i class="bi bi-printer"></i>Imprimir</li>
        </ul>
      </section>
      <img src="../../recursos/imgs/recetasimgs/Tabla-de-vegaltes-1.jpg" alt="tabla-vegetal" />
      <section class="contenido-receta">
        
        <h1 id="nombreReceta">Tabla de vegetales</h1>
        <p>
          Alimento estrella Espárragos: Los espárragos son ricos en minerales
          como fósforo, potasio y hierro, son un alimento alto en fibra y
          excelentes en antioxidantes que ayudan a reducir los niveles de
          colesterol, favoreciendo la salud cardiovascular.
        </p>

        <p>
          El consumo regular de verduras puede generar un cambio realmente
          positivo en el estado de salud de una persona. Para ayudarte en esa
          tarea, te compartimos esta receta de parrillada de verduras, con la
          que podrás descubrir los beneficios de estos alimentos de una manera
          divertida.
        </p>
        <section class="ingredientes-datos">
          <section class="ingredientes">
            <h3>Ingredientes</h3>
            <ul>
              <li>
                <sup>1</sup>/<sub>4</sub> de taza de crema de vinagre balsamico.
              </li>
              <li><sup>1</sup>/<sub>4</sub> de taza de aceite de oliva.</li>
              <li>Sal y pimienta recien molida.</li>
              <li>1 rama de romero fresco, picado.</li>
              <li>1 cdita. de orégano seco.</li>
              <li>La raspadura de 1 limón eureka.</li>
              <li>1 pimiento rojo y 1 amarillo, cortado en cuartos.</li>
              <li>12 espárragos, cortados a la mitad.</li>
              <li>8 champiñones grandes, cortados por la mitad.</li>
              <li>1 cebolla morada, cortada en cuartos.</li>
              <li>3 calabazas, rebanadas a lo largo.</li>
              <li>2 elotes amarillos, cortados en trozos.</li>
              <li>8 calabacitas amarillas, cortadas por la mitad.</li>
              <li>4 jitomates medianos, cortados en rebanadas gruesas.</li>
            </ul>
          </section>
          <section class="datos">
            <h4>Valor nutritivo por porción</h4>
            <hr class="lineaDatos" />
            <ul>
              <li>283 kcal</li>
              <hr />
              <li>16 de grasas</li>
              <hr />
              <li>9 de proteinas</li>
              <hr />
              <li>33 hidratos de carbono</li>
            </ul>
          </section>
        </section>
        <section class="preparacion">
          <h3>Preparación</h3>
          <ol>
            <li>Cortar las verduras como se indica en los ingredientes.</li>
            <li>
              Para la marinada coloca en una tazón la sal, la pimienta, la
              ralladura del limón, las hierbas de olor agregando aceite de oliva
              en forma de hilo y mezclando hasta homogeneizar.
            </li>
            <li>
              Coloca las verduras en la marinada y deja reposar al menos por 30
              minutos.
            </li>
            <li>
              Calienta una parrilla y cocina las verduras a flama baja, sólo el
              tiempo necesario para que estén ligeramente cocidas.
            </li>
          </ol>
        </section>
      </section>
    </article>

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
