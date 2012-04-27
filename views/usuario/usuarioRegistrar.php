<body>
    <script>
        $(document).ready(function(){
            $("#form-usuario-registro").validate({
                rules:{
                    user:{
                        required:true,
                        alphanumeric:true,
                        nowhitespace:true,
                        minlength:6
                    },
                    userpassword:{
                        required:true,
                        minlength:6
                    },
                    userpassword2:{
                        required:true,
                        minlength:6
                    },
                    email:{
                        required:true,
                        email:true
                    }
                },
                messages:{
                    user:{
                        required:"Campo obligatorio.",
                        alphanumeric:"Solo se permiten letras y números.",
                        nowhitespace:"No se permiten espacios en blanco.",
                        minlength:"Al menos debe tener 6 caracteres."
                    },
                    userpassword:{
                        required:"Campo obligatorio",
                        minlength:"Al menos debe tener 6 caracteres."
                    },
                    userpassword2:{
                        required:"Campo obligatorio",
                        minlength:"Al menos debe tener 6 caracteres."
                    },
                    email:{
                        required:"Campo obligatorio.",
                        email:"Introduzca una direccion de correo correcta."
                    }

                },
                errorLabelContainer: "#falloRegistro",
                debug:true
            });
        });
    </script>
    <div id="content">
        <?php mostrarAcceso(); ?>
        <br/><br/>
        <div id="izquierda">


            <form name="registro" id="form-usuario-registro" method="post"
                  action="<?php echo ACTION_USUARIO_NUEVO; ?>">
                <!--onsubmit="return validarRegistro(this);"-->

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
        <?php require(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>