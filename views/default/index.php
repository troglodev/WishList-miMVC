<body>
    <div id="content">
        <?php isset($variables['mensaje']) ? mostrarAcceso($variables['mensaje']) : mostrarAcceso(); ?>
        <br/><br/>
        <div id="inicio">
            <center>
                <h2>
                    Todav&iacute;a no tienes tu propio WishList?<br/><br/>
                    <a href="<?php echo ACTION_USUARIO_MOSTRARFORM; ?>">
                        Cons&iacute;guelo ya!
                    </a>
                </h2>
            </center>
        </div>
        <?php require(HTML_PIE); ?>
    </div>
</body>
</html>