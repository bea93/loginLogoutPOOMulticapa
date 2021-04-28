<h2 class = "fh5co-heading animate-box" data-animate-effect = "fadeInLeft">Borrar Cuenta</h2>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    <fieldset>
        <h3>¿Seguro que quieres borrar el usuario <?php echo $descUsuario ?> ?</h3>        
        <button class="logout" type="submit" name='Aceptar'>Aceptar</button>
        <button class="logout" type="submit" name='Cancelar'>Cancelar</button>
    </fieldset>
</form>