<script>
    $(document).ready(function(){
        $("#form-acceso").validate({
            rules:{
                user:{
                    required:true,
                    alphanumeric:true
                },
                userpassword:{
                    required:true,
                    alphanumeric:true
                }
            },
            messages:{
                user:{
                    required:"Rellene el usuario.",
                    alphanumeric:"Solo se permiten letras y números."
                },
                userpassword:{
                    required:"Rellene la contraseña.",
                    alphanumeric:"Solo se permiten letras y números."
                }
            },
            highlight: function(element, errorClass) {
                $("#ir").fadeIn("fast");
                $("#falloAcceso").fadeIn("fast");
            },
            errorLabelContainer: "#falloAcceso",
            debug:true,
            onsubmit: false
        });
    });
</script>


<?php

function mostrarAcceso($mensaje = null) {
    if (isset($_SESSION['user'])) {
        ?>

        <div id="acceso">
            <h3><a href="<?php echo ACTION_DESEO_MOSTRAR ?>">
                    <img src="img/heart.png"/>WishList</a></h3>
            <span id="hola">Hola <?php echo $_SESSION['user'] ?>!
                &nbsp;&nbsp;&nbsp;
                <a href="<?php echo ACTION_USUARIO_DESCONECTAR ?>">
                    Salir <img src="img/door_in.png" />
                </a>
            </span>
        </div>
    <?php } else { ?>
        <div id="acceso">
            <h3><a href="index.php"><img src="img/heart.png"/>WishList</a></h3>
            <form name="logon" id="form-acceso" action="<?php echo ACTION_USUARIO_ACCEDER ?>"
                  method="post">
                Usuario:
                <input type="text" name="user" class="acceso"/>
                Contraseña:
                <input type="password" name="userpassword" class="acceso"/>
                <input type="image" name="Ir" id="ir" src="img/key_go.png" class="medio"/>
                <br/>
                <div id="falloAcceso">
                    <?php
                    if (isset($mensaje)) {
                        echo $mensaje;
                    }
                    ?>
                </div>
            </form>
        </div>
        <?php
    }
}
?>