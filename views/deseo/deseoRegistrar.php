<body>
    <script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
    <script type="text/javascript" src="js/validar.deseo.js"></script>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="deseo">
                <form id="form-deseo" name="deseo" method="post" action="<?PHP echo ACTION_DESEO_GUARDAR ?>">
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
        <?php require(HTML_DERECHA) ?>
        <?php require(HTML_PIE) ?>
    </div>
</body>
</html>