<?php
    include("variables.php");

    error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);
    session_start();
    
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
    if (!$conexion) {
        die("Fallo: " . mysqli_connect_error());
    }

    $sentenciaSQL = "SELECT email, fileName FROM usuarios WHERE id_usuario='" . $_SESSION["id_usuario"] . "'";

    $resultado = mysqli_query($conexion, $sentenciaSQL);
    mysqli_close($conexion);

    if (mysqli_num_rows($resultado) > 0) {
        $registro = mysqli_fetch_assoc($resultado);
    
        session_start();
        $_SESSION["email"] = $registro["email"];
        $_SESSION["userPic"] = "../imagenesUsuarios/".$registro["fileName"];
    }
?>