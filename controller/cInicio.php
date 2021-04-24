<?php
//Si el usuario no ha iniciado sesión se le redirige al login.php
if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ 
    header('Location: index.php');
    exit;
}

//Si se ha pulsado el botón de Cerrar Sesión
if (isset($_REQUEST['cerrarSesion'])) {
    //Destruye todos los datos asociados a la sesión
    session_destroy();
    //Redirige al login.php
    header("Location: index.php"); 
    exit;
}

$oUsuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];

//Variables que almacenan los datos del usuario sacadas de la BBDD
$numConexiones = $oUsuarioActual->getNumConexiones();
$descUsuario = $oUsuarioActual->getDescUsuario();
$ultimaConexion = $oUsuarioActual->getFechaHoraUltimaConexion();
$imagenUsuario = $oUsuarioActual->getImagenPerfil();

//Guardamos en la variable vistaEnCurso la vista que queremos implementar
$vistaEnCurso = $vistas['inicio']; 
require_once $vistas['layout'];