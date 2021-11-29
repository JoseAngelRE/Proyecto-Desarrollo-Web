<?php
session_start();

if (!$_SESSION["autentificado"]) {
    header("Location: ../pags/loginRegistro.php");
}

?>
