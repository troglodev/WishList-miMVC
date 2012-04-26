<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="deseo">
                <form name="deseo" method="POST" action="<?PHP echo ACTION_DESEO_GUARDAR ?>">
                    Descripcion:
                    <input type="text" name="descripcion" value="<?php echo isset($descripcion) ? $descripcion : ''; ?>"/><br/>
                    Fecha:
                    <input type="text" name="fecha" value="<?php echo isset($fecha) ? $fecha : ''; ?>"/><br/>
                    <input type="submit" name="Submit" value="Lo quiero"/>
                    <div id="falloDeseo"><?php echo isset($mensaje) ? $mensaje : ''; ?>
                    </div>
                </form>
            </div>
        </div>
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php require(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>