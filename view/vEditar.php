<h2 class = "fh5co-heading animate-box" data-animate-effect = "fadeInLeft">Editar perfil</h2>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    <fieldset>
        <label for="CodUsuario">Código del Usuario</label><br>
                <input class="campos" type="text" id="CodUsuario" name="CodUsuario" readonly value="<?php echo $codUsuario; ?>">
                <br>

                <label for="DescUsuario" >Descripción del usuario(*)</label><br>
                <input class="campos" type="text" id="DescUsuario" name="DescUsuario" value="<?php echo $descUsuario; ?>">
                <?php
                    echo $errorDescripcion!=null ? "<span style='color:#FF0000'>".$errorDescripcion."</span>" : null;
                ?>
                <br>

                <label for="NumConexiones">Número de conexiones</label><br>
                <input class="campos" type="text" id="NumConexiones" name="NumConexiones" readonly value="<?php echo $numConexiones; ?>">
                <br>

                <label for="FechaHoraUltimaConexion">Fecha Hora Última Conexión</label><br>
                <input class="campos" type="text" id="FechaHoraUltimaConexion" name="FechaHoraUltimaConexion" readonly value="<?php echo (date('d/m/Y H:i:s')); ?>">
                <br>

                <label for="imagen">Imagen</label><br>
                <input class="campos" type="file" id="imagen" name="imagen">
                <?php
                    echo $errorImagen!=null ? "<span style='color:#FF0000'>".$errorImagen."</span>" : null;
                ?>
                <button class="logout" type="submit" name='Aceptar'>Aceptar</button>
                <button class="logout" type="submit" name='Cancelar'>Cancelar</button>
                <button class="logout" type="submit" name='CambiarPassword'>Cambiar Contraseña</button>
                <button class="logout" type="submit" name='BorrarCuenta'>Borrar Cuenta</button>
    </fieldset>
</form>