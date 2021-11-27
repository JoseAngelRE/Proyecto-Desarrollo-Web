<?php

function ejecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL) {

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
    if (!$conexion) {
        die("Fallo: " . mysqli_connect_error());
    }

    $resultado = mysqli_query($conexion, $sentenciaSQL);
    mysqli_close($conexion);

}