<body>
    <script type="text/javascript" src="js/validar.registro.js"></script>
    <div id="content">
        <?php mostrarAcceso(); ?>
        <br/><br/>
        <div id="izquierda">


            <form name="registro" id="form-usuario-registro" method="post"
                  action="<?php echo ACTION_USUARIO_NUEVO; ?>">

                <label for="user">Usuario:</label>
                <input type="text" name="user"
                       value="<?php echo isset($variables['usuario']) ? $variables['usuario'] : '' ?>"/><br/>

                <label for="userpassword">Password:</label>
                <input type="password" name="userpassword" /><br/>

                <label for="userpassword2">Repita Password:</label>
                <input type="password" name="userpassword2" /><br/>

                <label for="email">Email:</label>
                <input type="text" name="email"
                       value="<?php echo isset($variables['email']) ? $variables['email'] : ''; ?>"/><br/>

                <input type="submit" id="registrar" name="Submit" value="Registrar"/>
                <input type="reset" id="limpiar" value="Limpiar"/>
            </form>
            <div id="falloRegistro">
                <?php
                echo isset($variables['mensaje']) ? $variables['mensaje'] : '';
                ?>
            </div>
        </div>
        <?php require(HTML_PIE) ?>
    </div>
</body>
</html>