<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Login</h2>
    <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-login">
            <label>Usuario:</label>
            <input class="required" type="text" id="CodUsuario" name="CodUsuario" 
                   value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;?>">
        </div>
        <div>
            <label for="Password">Contraseña</label>
            <input class="required" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;?>">
        </div>

        <div>
            <button type="submit" name="IniciarSesion">Iniciar sesión</button>
        </div>
    </form>