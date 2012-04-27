<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="deseo">
                <form name="deseo" method="post" action="<?PHP echo ACTION_DESEO_GUARDAR ?>">
                    Descripcion:
                    <input type="text" name="descripcion"
                           value="<?php echo isset($variables['descripcion']) ? $variables['descripcion'] : ''; ?>"/><br/>
                    Fecha:
                    <input id="datepicker" type="text" name="fecha"
                           value="<?php echo isset($variables['fecha']) ? $variables['fecha'] : ''; ?>"/><br/>
                    <input type="submit" name="Submit" value="Lo quiero"/>
                    <div id="falloDeseo"><?php echo isset($variables['mensaje']) ? $variables['mensaje'] : ''; ?>
                    </div>
                </form>
            </div>
        </div>
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php require(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>