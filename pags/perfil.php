
<?php
error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include("../backendcodigo/sesion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del usuario</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5d433e8279.js" crossorigin="anonymous"></script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css">
    <link rel="stylesheet" href="../estilos/perfil.css">
    <script src="../scripts/cookiesPags.js"> </script>
    <script language="javascript">
      function verVentana(url) {
        
      }

      window.onload = function () {
        document.getElementById("cambiarIMG").onclick = function () {
          ventana = window.open("subirImg.html", "ventana", "width=330, height=320");
          ventana.focus();
        }
      }
    </script>
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
                      <a class="nav-link" href="recetaMenu.php">Recetas</a>
                  </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="cuidate.php">Cuídate</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="padecimientos.php">Padecimientos</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="imcPagina.php">Calcula tu IMC</a>
                    </li>
                    <li class="nav-item cosa"> 
                        <a class="nav-link activa" href="perfil.php">Perfil</a>
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

    <main>
        <section>
            <div id="perfilHeader">
                <div id="icono">
                    <img src="../recursos/imgs/iconoUsuario.png" width="200" height="200"><br>
                    <input type="button" name="cambiarIMG" id="cambiarIMG" value="Cambiar imagen" />
                </div>
                <div id="title">
                    <h1>Datos del usuario:</h1>
                    <h2>
                      <?php 
                      echo $_SESSION["nombre"]; 
                      ?>
                    </h2>
                </div>
            </div>
            <div id="perfilContent">
                <div id="ultimosDatos">
                    <h2>Ultimos datos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem amet consequuntur voluptates vel
                        cupiditate ducimus neque quae voluptatem ad adipisci dolorum unde excepturi quisquam modi
                        quibusdam nostrum, et, voluptatibus eum. Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Obcaecati error odit aperiam eum fuga, minima dolore, totam dolorem soluta, nobis expedita
                        beatae. Alias, nisi at exercitationem facere rerum suscipit earum. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Possimus aspernatur ratione magni sed odit, eligendi, cum quasi
                        magnam maiores quo, natus quisquam laudantium ea? Ullam iusto cum magnam blanditiis ipsum?</p>
                </div>
                <div id="penultimosDatos">
                    <h2>Datos anteriores</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore cum quod dignissimos. Nemo
                        aut illo velit ipsam neque, voluptates natus, quaerat atque commodi dolore nesciunt accusamus
                        fuga incidunt quos doloribus? Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                        dolores consequuntur neque repudiandae ratione quam inventore beatae. Illum doloribus
                        consequatur tempora dolorum, officia, inventore, totam qui eveniet iure nemo et? Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit. Consectetur atque dolorem aut optio. At veniam
                        labore porro harum consectetur inventore deleniti doloremque quia dolor? Quisquam quidem
                        molestiae rem beatae distinctio?</p>
                </div>
            </div>
            <div id="recomendaciones">
                <div id="titulo">
                    <h1>RECOMENDACIONES</h1>
                </div>
                <div id="recomendacionesTexto"> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione voluptate explicabo ullam
                        aliquam impedit maiores consectetur? Officia culpa a minus cum ea consectetur, tempora,
                        temporibus exercitationem adipisci saepe sunt magnam. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Consectetur vero rerum, ullam accusamus, molestias optio consequatur quibusdam
                        error, fuga ratione debitis non atque expedita? Quisquam atque quia consequuntur natus tenetur!
                    </p>
                </div>
            </div>
        </section>
    </main>

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>