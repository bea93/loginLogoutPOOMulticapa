<?php 
require_once 'config/config.php';

session_start();

require_once 'config/configDB.php';

//Si el usuario ha solicitado otra página distinta del login
if(isset($_SESSION['paginaEnCurso']) && $_SESSION['paginaEnCurso']!==$controladores["login"]){
    //Incluimos el controlador de la página solicitada almacenado en la sesión
    require_once $_SESSION['paginaEnCurso']; 
} else {
    //Por defecto, la primera vez que el usuario entra en la página cargamos el controlador del login
    require_once $controladores["login"]; 
}