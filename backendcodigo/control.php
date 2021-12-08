<?php

include("variables.php");

$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
$password = htmlentities($_REQUEST["password"], ENT_QUOTES);

$email = strip_tags(html_entity_decode($email));
$password = strip_tags(html_entity_decode($password));

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
    die("Fallo: " . mysqli_connect_error());
}

$sentenciaSQL = "SELECT id_usuario, nombre, email, contrasena FROM usuarios WHERE email ='" . $email . "' AND contrasena ='" . $password . "'";

$resultado = mysqli_query($conexion, $sentenciaSQL);

mysqli_close($conexion);

if (mysqli_num_rows($resultado) > 0) {
    $registro = mysqli_fetch_assoc($resultado);

    session_start();
    $_SESSION["autentificado"] = true;
    $_SESSION["nombre"] = $registro["nombre"];
    $_SESSION["id_usuario"] = $registro["id_usuario"];


    if (isset($_SESSION['current_page'])) {
        header("location: " . $_SESSION['current_page']);
    } else {
        header("location: ../index.php");
    }

} else {
    header("location: ../pags/loginRegistro.php");
}


?>