
<?php
error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include("../backendcodigo/sesion.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/5d433e8279.js" crossorigin="anonymous"></script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css">
    <script src="../scripts/cookiesPags.js"> </script>
    <title>Recetas</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a href="../index.php" class="navbar-brand"><h1>I-M-C-uídate</h1></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link cosa" href="../index.php">HOME</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link activa" href="recetaMenu.php">Recetas</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="cuidate.php">Cuídate</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="padecimientos.php">Padecimientos</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="imc.html">Calcula tu IMC</a>
                    </li>
                    <li class="nav-item cosa"> 
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="../backendcodigo/salir.php">Cerrar sesión</a>
                    </li>
                    <li>
                      <a class="nav-link"><button class="button" onclick="cambiartema()">Cambiar tema</button></a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card" >
            <img
              src="../recursos/imgs/recetasimgs/Tabla-de-vegaltes-1.jpg"
              class="img-fluid"
              alt="..."
            />
            <div class="card-body text-center">
              <h5 class="card-title">Tabla de vegetales</h5>

              <a href="recetaspags/recetaVegetales.php" class="btn btn-primary btn-block">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/espagueti-bolonesa.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Espagueti a la boloñesa</h5>

                <a href="recetaspags/recetaBolonesa.php" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/receta-de-ensalada-caprese.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Ensalada caprese</h5>

                <a href="recetaspags/recetaEnsaladaCaprese.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
    
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/res-esparragos.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Filete de res con vegetales</h5>

                <a href="recetaspags/recetaFileteRes.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/lomo-cerdo.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Lomo de cerdo con champiñones</h5>

                <a href="recetaspags/recetaLomoCerdo.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/pizza-pesto-margarita.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Pizza pesto margarita</h5>

                <a href="recetaspags/recetaPizzaPestoMargarita.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
    
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/Pollo-a-la-mostaza-2.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Pollo a la mostaza</h5>

                <a href="recetaspags/recetaPolloMostaza.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/salmon-sellado.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Salmón sellado</h5>

                <a href="recetaspags/recetaSalmonSellado.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/Tostadas-de-champinones_1.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Tostada de champiñones</h5>

                <a href="recetaspags/recetaTostadaChampi.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
    
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card" >
              <img
                src="../recursos/imgs/recetasimgs/pollo-vegetales.jpg"
                class="img-fluid"
                alt="..."
              />
              <div class="card-body text-center">
                <h5 class="card-title">Pollo con vegetales a la parrilla</h5>

                <a href="recetaspags/recetaPolloVegetales.php" class="btn btn-primary btn-block">Ver más</a>


              </div>
            </div>
          </div>
    </div>
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

    <div id="button-up">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="../scripts/botonArriba.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
