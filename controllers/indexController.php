<?php

class IndexController extends ControllerBase {

    public function index() {
       // require('libs/View.php');
        show(VISTA_INICIO);
    }

    public function error() {
        $variables['error'] = 'Debes iniciar sesión.';
        show(VISTA_INICIO, $variables);
    }

}
