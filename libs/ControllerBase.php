<?php

abstract class ControllerBase {

    protected $view;
    protected $modelo;

    public function __construct() {
        $this->view = new View();

    }

    public function cambiaHeader($ruta) {
        header('Location: ' . $ruta);
    }

}

?>