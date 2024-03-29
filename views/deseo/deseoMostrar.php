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
                        <a href="<?php echo ACTION_DESEO_EDITAR_ID . $idnum ?>" onclick="return confirmarEditar();">
                            <img src="img/note_edit.png" href="index.php" />
                        </a>
                        <a href="<?php echo ACTION_DESEO_ELIMINAR_ID . $idnum ?>" onclick="return confirmarEliminar();">
                            <img src="img/heart_delete.png" alt="Eliminar"/>
                        </a>
                        <a href="<?php echo ACTION_DESEO_CUMPLIR_ID . $idnum ?>" onclick="return alert('Enhorabuena');">
                            <img src="img/accept.png"/>
                        </a>
                        <br/>
                        <span id="<?php echo $idnum ?>">
                            <?php echo $item['desc'] ?>
                        </span>
                    </div>
                <?php } ?>
            </form>

        </div>
        <?php require(HTML_DERECHA) ?>
        <?php require(HTML_PIE) ?>
    </div>
</body>
</html>