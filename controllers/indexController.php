<?php

class IndexController extends ControllerBase {

    public function index() {
        $this->view->show(VISTA_INICIO);
    }

    public function error() {
        $variables['error'] = 'Debes iniciar sesión.';
        $this->view->show(VISTA_INICIO, $variables);
    }

}
