<?php

session_start();//inicia sesion del navegador en el servidor PHP
                //o la continua si ya estuviera iniciada

include ('misfunciones.php');

function limpiaPalabra($palabra){
    //filtro muy básico para evitar la inyeccion SQL
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



//echo 'Has escrito el usuario:' .$cajaNombre. 'y la contraseña:' .$cajaPassword;

$resultadoQuery = $mysqli -> query("SELECT * FROM usuarios WHERE nombreUsuario = '$cajaNombre' AND userPass = '$cajaPassword' ");

$numUsuarios = $resultadoQuery -> num_rows;

if($numUsuarios > 0){
    $r = $resultadoQuery -> fetch_array();
    //en la variable de sesion "nombreUsuario" guardo el nombre de usuario
    $_SESSION['nombreUsuario'] = $cajaNombre;
    
    //en la variable de session idUsuario guardo el id de usuario leido de la BBDD
    $_SESSION['idUsuario'] = $r['idUsuario'];
    //muestra la pantalla de la aplicacion
    require 'app.php';
}
else{
    //muestra una pantalla de error
    require 'error.php';
}