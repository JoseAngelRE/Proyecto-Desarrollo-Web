<?php

include("variables.php");


if(isset($_REQUEST["peso"]) && isset($_REQUEST["altura"]) && isset($_REQUEST["resultado"])){
    if(!(is_null($_REQUEST["peso"])) && !(is_null($_REQUEST["altura"])) && !(is_null($_REQUEST["resultado"]))){
        if(is_numeric($_REQUEST["peso"]) && is_numeric($_REQUEST["altura"])){
            session_start();
            $peso = $_REQUEST["peso"];
            $altura = $_REQUEST["altura"];
            $resultado = $_REQUEST["resultado"];
            
            $id_user = $_SESSION["id_usuario"];
            $sentenciaSQL = "INSERT INTO imc (id_usuario, peso, altura, resultado) VALUES ('".$id_user."' , '". $peso . "', '" . $altura . "', '" . $resultado . "')";

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