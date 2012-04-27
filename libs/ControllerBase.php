<?php

abstract class ControllerBase {

    protected $view;
    protected $validator;

    public function __construct() {
        $this->view = new View();
        $this->validator = Valida::singleton();
    }

    public function cambiaHeader($ruta) {
        header('Location: ' . $ruta);
    }

}

?>