<body>
    <div id="content">
        <?php mostrarAcceso() ?>
        <div id="izquierda">
            <div id="titular">Titulo</div>

                <form action="#" method="post" onsubmit="return validarDeseo(this);">
                    <?php foreach ($variables['items'] as $item) { ?>
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
        </div>
        <?php require(HTML_DERECHA) ?>
        <?php require(HTML_PIE) ?>
    </div>
</body>
</html>