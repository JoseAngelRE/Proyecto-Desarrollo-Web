<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "proyectoweb";

if(isset($_REQUEST["peso"]) && isset($_REQUEST["altura"]) && isset($_REQUEST["resultado"])){
    if(!(is_null($_REQUEST["peso"])) && !(is_null($_REQUEST["altura"])) && !(is_null($_REQUEST["resultado"]))){
        if(is_numeric($_REQUEST["peso"]) && is_numeric($_REQUEST["altura"])){
            $peso = $_REQUEST["peso"];
            $altura = $_REQUEST["altura"];
            $resultado = $_REQUEST["resultado"];
            
            $sentenciaSQL = "INSERT INTO imc (peso, altura, resultado) VALUES ('" . $peso . "', '" . $altura . "', '" . $resultado . "')";

            $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
	        if (!$conexion) {
    	        die("Fallo: " . mysqli_connect_error());
	        }

	        $resultado = mysqli_query($conexion, $sentenciaSQL);
            
	        mysqli_close($conexion);
        }
    }
}
?>