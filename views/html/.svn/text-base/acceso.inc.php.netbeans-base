<?php

function mostrarAcceso($mensaje = null) {
    if (isset($_SESSION['user'])) {
        ?>
        <div id="acceso">
            <h3><a href="index.php?controlador=deseo&accion=mostrar">
                    <img src="img/heart.png"/>WishList</a></h3>
            <span id="hola">Hola <?php echo $_SESSION['user'] ?>!
                &nbsp;&nbsp;&nbsp;
                <a href="index.php?controlador=usuario&accion=desconectar">
                    Salir <img src="img/door_in.png" />
                </a>
            </span>
        </div>
    <?php } else { ?>
        <div id="acceso">
            <h3><a href="index.php"><img src="img/heart.png"/>WishList</a></h3>
            <form name="logon" action="index.php?controlador=usuario&accion=acceder"
                  method="POST" onsubmit="return validarAcceso(this);">
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