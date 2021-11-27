<?php
include ("funciones.php");

$servidor = "localhost";
$usuario = "root";
$contrasena = "root";
$basedatos = "imcuidate";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
    die("Fallo: " . mysqli_connect_error());
}

//Evitar cross scripting - sustituir caraceres por equivalentes en HTML
$nombreUsuario = htmlentities($_REQUEST["nombreUsuario"], ENT_QUOTES);
$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
$password = htmlentities($_REQUEST["password"], ENT_QUOTES);

//Evitar cross scripting - eliminar etiquetas HTML
$nombreUsuario = strip_tags(html_entity_decode($nombreUsuario));
$email = strip_tags(html_entity_decode($email));
$password = strip_tags(html_entity_decode($password));

$sentenciaSQL = "SELECT nombre, email, contrasena FROM usuarios WHERE email ='" . $email . "'";

$resultado = mysqli_query($conexion, $sentenciaSQL);

mysqli_close($conexion);

if (mysqli_num_rows($resultado) > 0) {
    header("Location: ../pags/loginRegistro.php?registrado=true");

} else {
    $sentenciaSQL = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('" . $nombreUsuario . "', '" . $email . "', '" . $password . "')";
    ejecutarSQL($servidor, $usuario, $contrasena, $basedatos,  $sentenciaSQL);
    session_start();
    $_SESSION["autentificado"] = true;
    $_SESSION["nombre"] = $nombreUsuario;

    //Si hay registro reenviar a la página menu.php
    header("location: ../index.php");
}


?>