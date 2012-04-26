<?php

class IndexController extends ControllerBase {
    private static $instance=null;

    public function index() {
        $this->view->show(URL_INICIO);
    }

    public static function singleton() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        parent::__construct();
    }

}
