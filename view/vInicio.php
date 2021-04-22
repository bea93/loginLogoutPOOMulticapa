<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Inicio</h2>
<article>
    <!--Mensaje de bienvenida cuando el usuario se loguea correctamente. Muestra la descripción del usuario -->
    <h3>¡Bienvenid@ <?php echo $descUsuario; ?>!</h3>
    <?php
    //Si la última conexión del usuario es null se muestra un mensaje de conexión por primera vez
    if ($numConexiones === 0) {
        echo "<h3>Esta es la primera vez que te conectas.</h3>";
    } else {
        ?>
        <h3>Usted se ha conectado <?php echo $numConexiones . " veces"; ?></h3>
        <h3>Su última conexión fue el día <?php echo date('d/m/Y', $ultimaConexion); ?> 
            a las <?php echo date('H:i:s', $ultimaConexion); ?></h3>
    <?php } ?>
</article>
<div>
    <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="logout" type="submit" name='cerrarSesion'>Cerrar Sesión</button>
    </form>
</div>