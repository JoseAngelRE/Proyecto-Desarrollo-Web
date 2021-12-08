<?php
    include("variables.php");

    error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
    session_start();
    
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
    if (!$conexion) {
        die("Fallo: " . mysqli_connect_error());
    }

    $sentenciaSQL = "DELETE FROM imc WHERE id_usuario='" . $_SESSION["id_usuario"] . "'";
    mysqli_query($conexion, $sentenciaSQL);
    echo "location.reload();";
    mysqli_close($conexion);
?>