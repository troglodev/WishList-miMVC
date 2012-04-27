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
            <form name="logon" action="<?php echo ACTION_USUARIO_ACCEDER ?>"
                  method="post" onsubmit="return validarAcceso(this);">
                Usuario:
                <input type="text" name="user" class="acceso"/>
                Contraseña:
                <input type="password" name="userpassword" class="acceso"/>
                <input type="image" name="Ir" src="img/key_go.png" class="medio"/>
                <br/>
                <div id="error">
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