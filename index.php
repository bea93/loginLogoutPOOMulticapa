<?php 
require_once 'config/config.php';

session_start();

require_once 'config/configDB.php';

//Si el usuario ha solicitado otra página distinta del login
if(isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){
    //Incluimos el controlador de la página solicitada almacenado en la sesión
    require_once $_SESSION['paginaEnCurso']; 
} else if (isset($_SESSION['paginaEnCursoSinRegistro'])){ // Si el usuario no ha iniciado sesion y a solicitado una pagina en curso sin registro
    require_once $_SESSION['paginaEnCursoSinRegistro']; // Incluimos el controlador de la pagina en curso sin registro
}else{ // Si el usuario no se ha identificado y no ha solicitado ninguna pagina en curso sin registro por defecto cargaremos el login
    require_once $controladores['login']; // Incluimos el controlador del login
}
 