<?php

error_reporting(E_WARNING ^ E_ALL ^ E_NOTICE);

$nombreUsuario = (isset($_POST['username'])) ? $_POST['username'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$password2 = (isset($_POST['password2'])) ? $_POST['password2'] : '';;

$nombreUsuario = htmlentities($nombreUsuario, ENT_QUOTES);
$email = htmlentities($email, ENT_QUOTES);
$password = htmlentities($password, ENT_QUOTES);
$password2 = htmlentities($password2, ENT_QUOTES);

//Evitar cross scripting - eliminar etiquetas HTML
$nombreUsuario = strip_tags(html_entity_decode($nombreUsuario));
$email = strip_tags(html_entity_decode($email));
$password = strip_tags(html_entity_decode($password));
$password2 = strip_tags(html_entity_decode($password2));

$array = ['username' => $nombreUsuario, 'email' => $email, 'password' => $password, 'password2' => $password2];
echo json_encode($array);
