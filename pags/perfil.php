
<?php
error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include("../backendcodigo/sesion.php");
include("../backendcodigo/loadDataPerfil.php");
include("../backendcodigo/variables.php");

?>

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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="../scripts/cookiesPags.js"> </script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css">
    <link rel="stylesheet" href="../estilos/perfil.css">


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

    <main id="main">
        <section>
            <div id="perfilHeader">
                <div id="icono">
                  <img src="<?php echo $_SESSION["userPic"]; ?>" width="200" height="200"><br>
                  <input type="button" name="cambiarIMG" id="cambiarIMG" value="Cambiar imagen" />
                </div>
                <div id="title">
                    <h1>Hola, 
                      <?php 
                        if (isset( $_SESSION["nombre"] ) ){
                          echo $_SESSION["nombre"]; 
                        }
                      ?>
                    </h1>
                    <h2>
                      <?php 
                        if (isset( $_SESSION["email"] ) ){
                          echo $_SESSION["email"]; 
                        }
                      ?>
                    </h2>
                    <h3>
                      <input id="botonGet" type="submit" value="Borrar historial"/>
                      <p id="errorDelete">
                      </p>
                    </h3>
                </div>
            </div>
            <article id="userData">
              <h2>Estos son tus últimos registros</h2>
              <table id="TablaHistorial" class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Peso</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Resultado</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
                  if (!$conexion) {
                      die("Fallo: " . mysqli_connect_error());
                  }
                  $sentenciaSQL = "CALL `ShowIMCData`(".$_SESSION["id_usuario"].");";
                  $imcRequest = mysqli_query($conexion, $sentenciaSQL);
                  mysqli_close($conexion);

                  if (mysqli_num_rows($imcRequest) > 0) {
                      while ($registro = mysqli_fetch_assoc($imcRequest) ){
                        echo "<tr> 
                        <td>".$registro['peso']."</td>
                        <td>".$registro['altura']."</td>
                        <td>".$registro['resultado']."</td>
                      </tr>";
                      }
                  }
                ?>
                
                </tbody>
              </table>
            </article>
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
    
        <script src="../scripts/botonArriba.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script >
      document.getElementById("cambiarIMG").onclick = function () {
        ventana = window.open("subirImg.html", "ventana", "width=330, height=320");
        ventana.focus();
      }
    </script>

    <script src="../scripts/borrarHistorialAJAX.js"></script>
</body>

</html>