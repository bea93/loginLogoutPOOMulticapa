<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Inicio</h2>
<article>
    <!--Mensaje de bienvenida cuando el usuario se loguea correctamente. Muestra la descripción del usuario -->
    <h3>¡Bienvenid@ <?php echo $descUsuario; ?>!</h3>
    <h2 class="bienvenida"><?php echo $aLang[$_COOKIE['idioma']]['welcome'] ?> </h2>
        <h4><?php echo ($numConexiones > 1) ? "Te has conectado " . $numConexiones . " veces."  : "Esta es la primera vez que te conectas." ?></h4>
        <?php echo ($ultimaConexion != null) ? "<h4>La última conexión fue el " . date('d/m/Y', $ultimaConexion) . " a las " . date('H:i:s', $ultimaConexion) . "</h4>" : null; ?>
    </article>
</article>
<div>
    <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="logout" type="submit" name='cerrarSesion'>Cerrar Sesión</button>
    </form>
</div>