
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
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/5d433e8279.js"
      crossorigin="anonymous"
    ></script>
    <link id="principal" rel="stylesheet" href="../estilos/main.css" />
    <link rel="stylesheet" href="../estilos/imcEstilos.css" />
    <script src="../scripts/cookiesPags.js"> </script>
    <title>Calcula tu IMC</title>
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
              <a class="nav-link activa" href="imcPagina.php">Calcula tu IMC</a>
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
    <main class="imc">
      <p>
        El Índice de Masa Corporal (IMC) es el resultado de la relación entre tu
        peso y tu estatura, es uno de los métodos más utilizados y prácticos
        para identificar el grado de riesgo asociado con la obesidad. Tu salud
        es una razón de peso, ¡te invitamos a calcular el tuyo!
      </p>
      <section class="contenedor">
        <section class="caja uno">
          <h1 class="tituloX">Completa los siguientes campos</h1>
          <form name="form" method="get">
            <section class="campoX generos">
              <div>
                <input type="radio" name="genero" id="generoMujer" />
                <label class="texto labelgenero" for="generoMujer">Mujer</label>
              </div>
              <div>
                <input type="radio" name="genero" id="generoHombre" />
                <label class="texto labelgenero" for="generoHombre"
                  >Hombre</label
                >
              </div>
            </section>
            <hr />
            <section class="campoX pesoEstatura">
              <div class="campito">
                <label class="texto labelPesoEstatura" for="peso"
                  >Introduce tu peso (Kg)</label
                >
                <input class="cajaInput" type="text" name="peso" placeholder="Peso" id="peso" pattern="[0-9\/]*" maxlength="3" onkeypress="return esNumeros(event)" onclick="this.select()" required/>
              </div>

              <div class="campito">
                <label class="texto labelPesoEstatura" for="altura"
                  >Introduce tu altura (cm)</label
                >
                <input class="cajaInput" type="text" name="altura" placeholder="Altura" id="altura" pattern="[0-9\/]*" maxlength="3" onkeypress="return esNumeros(event)" onclick="this.select()" required/>
              </div>
            </section>
            <input type="button" value="CALCULAR" id="btnCalcular" onclick="calculaesIMC()"/>
            <input type="submit" value="GUARDAR" id="btnSubmit" name="btnSubmit"/>
          </form>
        </section>
        <section class="caja dos">
          <h1 class="tituloX">Resultados</h1>
          <div>
            <div class="large-12 columns">
                <h2 id="imc2"></h2>
                <h3 class="cal" id="des"></h3>
                <img src="" class="mujer" id="img">
                <span id="leyenda"></span>
            </div>
          </div>
        </section>
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
    <script>

function esNumeros(e) {
    return e.charCode >= 48 && e.charCode <= 57;
}

var imc2;

if(localStorage.getItem("peso") != null && localStorage.getItem("altura") != null){
    document.form.peso.value = localStorage.getItem("peso");
    document.form.altura.value = localStorage.getItem("altura");
}


document.form.onsubmit = function(){
    var peso = document.form.peso;
    var altura = document.form.altura;
    var metodo = document.form.method;
    var url = "../backendcodigo/guardarIMC.php";
    calculaesIMC();
    if (typeof(Storage) !== "undefined") {
		localStorage.setItem(peso.name, peso.value);
        localStorage.setItem(altura.name, altura.value);
	} else {
		alert("Sorry, your browser does not support Web Storage...");
	}
    ajax(metodo, url, peso.name, peso.value, altura.name, altura.value, "resultado", imc2);
}

function ajax(metodo, url, variable1 ,valor1, variable2, valor2, variable3, valor3){
    var httpRequest;

    if (window.XMLHttpRequest) {
        httpRequest = new XMLHttpRequest();
    }else{
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }

    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState == 4 && httpRequest.status == 200) {
        }
    }

    if(metodo == "get"){
        httpRequest.open(metodo, url+"?"+variable1+"=" + valor1 + "&"+variable2+"=" + valor2+ "&"+variable3+"=" + valor3);
    }else{
        httpRequest.open(metodo, url);
        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    }
    httpRequest.send(variable1+"=" + valor1 + "&"+variable2+"=" + valor2 + variable3+"=" + valor3);
}

function calculaesIMC()
	{
	 
		var peso2, altura, imc, img, des, leyenda;
		
		 peso2=document.getElementById("peso").value;
		 altura=document.getElementById("altura").value/100;

		
		 imc=peso2/(altura*altura);
		
		if(imc<=18.5)
		{
		

		imgpath = '../recursos/imgs/imc/';
		src = $('#img').attr('src', imgpath + "bajo-peso.svg" );
		imc2="IMC Bajo";
		des="Menor que 18"
		
		leyenda="El bajo peso puede ser causado por una deficiente alimentación o alguna enfermedad. Acude con un especialista para analizar las causas y ayudarte a llegar a tu peso ideal" + (altura*altura*18.5-peso2).toFixed(1) + " kilos";
		}
		else if(imc<=25)
		{
		
		imgpath = '../recursos/imgs/imc/';
		src = $('#img').attr('src', imgpath + "normal.svg" );
		imc2="IMC Normal"
		des="Entre 18.5 y 24.9";
		leyenda="¡Tu IMC indica que estás en tu peso normal. Al estar en este nivel, se reducen los riesgos a la salud mejorando tu calidad de vida en todos los sentidos! ";
		
		}
		else if(imc<=30)
		{
		
		imgpath = '../recursos/imgs/imc/';
		src = $('#img').attr('src', imgpath + "sobrepeso.svg" );
		imc2="IMC Sobrepeso";
		des="Entre 25 y 29.9";
		leyenda="¡El sobrepeso incrementa el riesgo de enfermedad cardiovascular. Asesórate con un especialista, sigue un plan de alimentación y ejercítate regularmente; así llegarás a tu IMC normal! ";
		
		}
		 else if(imc<=35)
		{
		
		imgpath = '../recursos/imgs/imc/';
		src = $('#img').attr('src', imgpath + "obesidad.svg" );
		imc2="IMC Obesidad grado I ";
		des="Entre 30 y 34.9";
		leyenda="Riesgo de desarrollar enfermedades cardiovasculares. Visita a un especialista, apégate al plan de alimentación, ejercicios e indicaciones. Recuerda, restablecer tu salud requiere de un compromiso. ";
		
		}

		else if(imc<=40)
		 {
      imgpath = '../recursos/imgs/imc/';
		 src = $('#img').attr('src', imgpath + "obesidad2.svg" );
		 imc2="IMC Obesidad Grado II ";
		 des=" Entre 35 y 39.9";
		 leyenda="Riesgo elevado para enfermedades cardiovasculares. Visita a un especialista lo más pronto posible y sigue sus indicaciones para iniciar un programa para bajar de peso. ";
		 
		 }
		 else if(imc>=40)
		 {
      imgpath = '../recursos/imgs/imc/';
		 src = $('#img').attr('src', imgpath + "obsidad3.svg" );
		 imc2="IMC Obesidad grado III: ";
		  des="Igual o mayor de 40";
		 leyenda="Riesgo muy elevado de enfermedades cardiovasculares. ¡Cuidado! No dejes pasar más tiempo y consulta a un especialista de inmediato, él te ayudará a analizar las causas y te brindará un programa adecuado. "
		 
		 }

		$("#imc2").text(imc2);
		$("#leyenda").html(leyenda);
		$("#des").html(des);
		 }
    </script>
  </body>
</html>
