<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="deseo">
                <?php foreach ($variables['items'] as $item) { ?>
                    <form method="post" onsubmit="return validarDeseo(this);"
                          action="<?php echo ACTION_DESEO_GUARDAR_ID . $item['id'] ?>">
                        Descripcion:
                        <input type="text" name="descripcion"
                               value="<?php echo isset($variables['descripcion']) ? $variables['descripcion'] : $item['desc']; ?>"/><br/>
                               <!--value="<?php //echo $item['desc'] ?>"/><br/>
                               -->

                        Fecha:
                        <input id="datepicker" type="text" name="fecha"
                               value="<?php echo isset($variables['fecha']) ? $variables['fecha'] : date_format(new DateTime($item['date']), 'd-m-Y'); ?>"/><br/>
                        <input type="hidden" name="id"
                               value="<?php echo $item['id'] ?>"/>
                        <input type="submit" name="Submit"
                               value="Confirmar"/>
                        <p id="mensaje"></p>
                    <?php } ?>
                </form>
                <div id="falloAcceso">
                    <?php
                    echo '<br/><br/><br/>';
                    echo isset($variables['mensaje']) ? $variables['mensaje'] : '';
                    ?>
                </div>
            </div>
        </div>
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php include(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>