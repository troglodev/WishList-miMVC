<body>
    <div id="content">
        <?php mostrarAcceso(); ?>
        <br/><br/>
        <div id="izquierda">
            <form name="registro" id="registro" method="POST"
                  action="<?php echo ACTION_USUARIO_NUEVO; ?>"
                  onsubmit="return validarRegistro(this);">

                <label for="user">Usuario:</label>
                <input type="text" name="user"
                       value="<?php echo isset($usuario) ? $usuario : '' ?>"/><br/>

                <label for="userpassword">Password:</label>
                <input type="password" name="userpassword" /><br/>

                <label for="userpassword2">Repita Password:</label>
                <input type="password" name="userpassword2" /><br/>

                <label for="email">Email:</label>
                <input type="text" name="email"
                       value="<?php echo isset($email) ? $email : ''; ?>"/><br/>

                <input type="submit" id="registrar" name="Submit" value="Registrar"/>
                <input type="reset" id="limpiar" value="Limpiar"/>
            </form>
            <div id="falloAcceso">
                <?php
                echo '<br/><br/><br/>';
                echo isset($mensaje) ? $mensaje : '';
                ?>
            </div>
        </div>
        <?php require('html/pie.inc.php') ?>
    </div>
</body>
</html>