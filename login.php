<?php

include ('misfunciones.php');
function limpiaPalabra($palabra){
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

$cajaNombre = limpiaPalabra($_POST['cajaNombre']);
$cajaPassword = limpiaPalabra($_POST['cajaPassword']);


//filtro muy básico para evitar la inyeccion SQL
$cajaNombre = trim($cajaNombre, "'");
$cajaPassword = trim($cajaPassword, "'");

$cajaNombre = trim($cajaNombre, " ");
$cajaPassword = trim($cajaPassword, " ");

$cajaNombre = trim($cajaNombre, "-");
$cajaPassword = trim($cajaPassword, "-");
//echo 'Has escrito el usuario:' .$cajaNombre. 'y la contraseña:' .$cajaPassword;

$resultadoQuery = $mysqli -> query("SELECT * FROM usuarios WHERE nombreUsuario = '$cajaNombre' AND userPass = '$cajaPassword' ");

$numUsuarios = $resultadoQuery -> num_rows;

//for( $i = 0; $i < $numPreguntas; $i++){
//    $r = $resultadoQuery -> fetch_array();
//    echo $r['nombreUsuario'] , '<br/>';
//}
if($numUsuarios > 0){
    //muestra la pantalla de la aplicacion
    require 'app.php';
}
else{
    //muestra una pantalla de error
    require 'error.php';
}