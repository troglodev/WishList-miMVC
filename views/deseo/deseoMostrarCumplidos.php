<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="titular">Titulo</div>
            <?php if ($vars != 0) { ?>
                <form action="#" method="POST" onsubmit="return validarDeseo(this);">
                    <?php foreach ($vars as $item) { ?>
                        <?php $idnum = $item['id'] ?>
                        <div id="deseo">
                            <span id="titulo">
                                <?php echo date_format(new DateTime($item['date']), 'd-m-Y') ?><br/>
                            </span>
                            <span id="<?php echo $idnum ?>">
                                <?php echo $item['desc'] ?>
                            </span>
                            <br/><br/><br/>
                        </div>
                    <?php } ?>
                </form>
            <?php } ?>
        </div>
        <?php require(RUTA_INC . HTML_DERECHA) ?>
        <?php require(RUTA_INC . HTML_PIE) ?>
    </div>
</body>
</html>