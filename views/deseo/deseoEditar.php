<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="deseo">
                <?php foreach ($vars as $item) { ?>
                    <form method="post" onsubmit="return validarDeseo(this);"
                          action="<?php echo ACTION_DESEO_GUARDAR_ID . $item['id'] ?>">
                        Descripcion:
                        <input type="text" name="descripcion"
                               value="<?php echo $item['desc'] ?>"/><br/>
                        Fecha:
                        <input type="text" name="fecha"
                               value="<?php echo date_format(new DateTime($item['date']), 'd-m-Y') ?>"/><br/>
                        <input type="hidden" name="id"
                               value="<?php echo $item['id'] ?>"/>
                        <input type="submit" name="Submit"
                               value="Confirmar"/>
                        <p id="mensaje"></p>
                    <?php } ?>
                </form>
            </div>
        </div>
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php include(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>