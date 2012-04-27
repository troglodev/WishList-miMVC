<body>
    <script>
        $(document).ready(function(){
            $("#form-deseo").validate({
                rules:{
                    descripcion:{
                        required:true
                        //alphanumeric:true
                    },
                    fecha:{
                        required:true,
                        alphanumeric:true
                    }
                },
                messages:{
                    descripcion:{
                        required:"Rellene la descripción."
                        //alphanumeric:"Solo se permiten letras y números."
                    },
                    fecha:{
                        required:"Rellene la fecha.",
                        alphanumeric:"Solo se permiten letras y números."
                    }
                },
                highlight: function(element, errorClass) {
                    $("#ir").fadeIn("fast");
                    $("#falloAcceso").fadeIn("fast");
                },
                errorLabelContainer: "#falloAcceso",
                debug:true,
                onsubmit: true
            });
        });
    </script>
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
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php require(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>