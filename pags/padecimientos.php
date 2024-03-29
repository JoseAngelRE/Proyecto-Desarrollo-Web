
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
    <title>Proyecto DAW</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5d433e8279.js" crossorigin="anonymous"></script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css">
    <link rel="stylesheet" href="../estilos/estiloPadecimiento.css">
    <script src="../scripts/scriptPadecimiento.js"></script>
    <script src="../scripts/cookiesPags.js"> </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a href="/index.html" class="navbar-brand">
                <h1>I-M-C-uídate</h1>
            </a>
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
                        <a class="nav-link activa" href="padecimientos.php">Padecimientos</a>
                    </li>
                    <li class="nav-item cosa">
                        <a class="nav-link" href="imcPagina.php">Calcula tu IMC</a>
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

    <main>
        <section>
            <h1>Padecimientos</h1>
            <h3>Es la acción de padecer o sufrir una enfermedad o un daño.
                Quien padece sufre algo nocivo o desventajoso en su cuerpo.</h3>

            <div class="flex-container" id="flex-container">
                <div id="1" onclick="desplegarObesidad(this)"><img src="../recursos/imgs/imgsPadecimientos/1.jpg">
                    <p>Sobrepeso y Obesidad</p>
                </div>
                <div id="2"  onclick="desplegarGota()"><img src="../recursos/imgs/imgsPadecimientos/2.jpg">
                    <p>Gota</p>
                </div>
                <div id="3"  onclick="desplegarHipertension()"><img src="../recursos/imgs/imgsPadecimientos/3.jpg">
                    <p>Hipertensión</p>
                </div>
                <div id="4" onclick="desplegarDiabetes()"><img src="../recursos/imgs/imgsPadecimientos/4.jpg">
                    <p>Diabetes</p>
                </div>
                <div id="5" onclick="desplegarCardio()"><img src="../recursos/imgs/imgsPadecimientos/5.jpg">
                    <p>Enfermedades Cardiovasculares</p>
                </div>
                <div id="6"  onclick="desplegarAnemia()"><img src="../recursos/imgs/imgsPadecimientos/6.jpg">
                    <p>Anemia</p>
                </div>
            </div>
        </section>
        <section id="fichaHipertension" style="display: none;">
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Hipertensión arterial</h1>
                <img src="../recursos/imgs/imgsPadecimientos/hipertension.jpg">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td> Afección en la que la presión de la sangre hacia las paredes de la arteria es demasiado
                            alta.</td>
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td> En algunos casos, la presión arterial elevada no presenta síntomas. Si no se trata, con el
                            tiempo, puede provocar trastornos de la salud, como enfermedades cardíacas y derrames
                            cerebrales.</td>
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>El tratamiento consiste en cuidado personal y diuréticos. Seguir una dieta saludable con
                            menos sal, ejercitarse regularmente y tomar medicamentos puede ayudar a bajar la presión
                            arterial.</td>
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>Médico de atención primaria, cardiólogo y nefrólogo.</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="fichaDiabetes" style="display: none;">
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Diabetes Mellitus</h1>
                <img src="../recursos/imgs/imgsPadecimientos/diabetes.jpg">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td> Afección crónica que afecta la manera en la que el cuerpo procesa el azúcar en sangre
                            (glucosa).
                            En la diabetes tipo 2, el cuerpo de la persona no produce suficiente insulina o es
                            resistente a la insulina.
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td> Incluyen sed, micción frecuente, hambre, cansancio y visión borrosa. En algunos casos, no
                            hay síntomas.
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>Dieta, ejercicios, insulinoterapia y medicación.
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>Médico de atención primaria, oftalmólogo, endocrinólogo, nutricionista.</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="fichaGota"style="display: none;">
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Gota</h1>
                <img src="../recursos/imgs/imgsPadecimientos/gota.png">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td>Forma de artritis caracterizada por dolores agudos, enrojecimiento y sensibilidad de las
                            articulaciones.
                        </td>
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td>Incluyen dolor agudo, enrojecimiento y, además, inflamación de las articulaciones (a menudo,
                            del dedo gordo del pie). Los ataques pueden producirse de manera repentina, usualmente de
                            noche.</td>
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>Durante un ataque agudo, los medicamentos antiinflamatorios (AINE) pueden aliviar el dolor y
                            disminuir la duración del ataque. Los pacientes con gota crónica pueden modificar sus
                            hábitos, como la dieta, el ejercicio y reducir la ingesta de alcohol, para minimizar la
                            frecuencia de los ataques. Además, los pacientes con gota crónica suelen usar medicamentos
                            como la colchicina.</td>
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>Médico de atención primaria y reumatólogo.</td>
                    </tr>
                </table>
            </div>
        </section >
        <section id="fichaAnemia"style="display: none;">
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Anemia</h1>
                <img src="../recursos/imgs/imgsPadecimientos/anemia.jpg">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td>Insuficiencia de glóbulos rojos saludables debido a la falta de hierro en el cuerpo.
                            Debido a la deficiencia de hierro, los glóbulos rojos no pueden transportar suficiente oxígeno a los tejidos del cuerpo. La deficiencia de hierro suele ocasionar bajos niveles de glóbulos rojos (anemia) y puede retrasar el desarrollo del feto.
                        </td>
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td>Las personas pueden sufrir:<br>
                            Todo el cuerpo: aturdimiento ligero, fatiga, letargo, malestar o mareos<br>
                            También comunes: caída del cabello, dificultad para respirar, dolor de cabeza, irritabilidad, síndrome de las piernas inquietas o uñas quebradizas
                            </td>
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>El tratamiento incluye el uso de suplementos de hierro y ocuparse de las causas subyacentes.</td>
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>Médico de atención primaria y reumatólogo, médico ginecólogo y obstetra, gastroenterólogo, nutricionista, pediatra.</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="fichaCardio"style="display: none;">
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Enfermedades Cardiovasculares</h1>
                <img src="../recursos/imgs/imgsPadecimientos/cardio.jpg">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td>Afección cardíaca que se manifiesta mediante vasos sanguíneos enfermos, problemas estructurales y coágulos sanguíneos.</td>
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td>Algunos síntomas, como dolor de pecho, inflamación de los tobillos y dificultad para respirar pueden ser señales de que algo está mal. </td>
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>El tratamiento varía y puede incluir cambios en el estilo de vida, medicamentos, cirugías, marcapasos y ablación.</td>
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>cardiólogo</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="fichaObesidad"style="display: none;" >
            <div class="contenedorFicha">
                <h1 class="tituloTabla">Sobrepeso y Obesidad</h1>
                <img src="../recursos/imgs/imgsPadecimientos/obesidad.jpg">
                <table class="tablaFicha">
                    <tr>
                        <td><b>Definición</b></td>
                        <td>El sobrepeso y la obesidad se definen como una acumulación anormal o excesiva de grasa que puede ser perjudicial para la salud.</td>
                    </tr>
                    <tr>
                        <td><b>Síntomas</b></td>
                        <td> Los adultos con un IMC de 25 a 29.9 se consideran con sobrepeso.La obesidad se diagnostica cuando el índice de masa corporal (IMC) es igual o mayor que 30.</td>
                    </tr>
                    <tr>
                        <td><b>Tratamientos</b></td>
                        <td>Consumir menos calorías, elegir los alimentos más saludables, realizar más ejercicio y controlar el peso puede ayudar a reducir la masa corporal.</td>
                    </tr>
                    <tr>
                        <td><b>Especialistas</b></td>
                        <td>Médico de atención primaria y nutricionista.</td>
                    </tr>
                </table>
            </div>
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

    <script src="../scripts/botonArriba.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>