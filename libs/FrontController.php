<?php

class FrontController {

    public static function main() {
        require_once 'libs/SPDO.php';
        require_once 'libs/ControllerBase.php';
        require_once 'libs/ModelBase.php';
        require_once 'libs/View.php';
        require_once 'libs/Valida.php';
        require_once 'libs/Config.php';

        require 'config/config.php';

        $config = Config::singleton();
        $ini_config = parse_ini_file('config/config.ini', true);

        foreach ($ini_config as $key => $value) {
            $config->set($key, $value);
        }
        if (!empty($_GET['controlador']))
            $controllerName = $_GET['controlador'] . 'Controller';
        else
            $controllerName = "indexController";

        if (!empty($_GET['accion']))
            $actionName = $_GET['accion'];
        else
            $actionName = "index";

        $controllerPath = 'controllers/' . $controllerName . '.php';

        if (is_file($controllerPath))
            require $controllerPath;
        else
            die('El controlador ' . $controllerName . 'no existe - 404 not found');

        if (is_callable(array($controllerName, $actionName)) == false) {
            trigger_error($controllerName . '->' . $actionName . ' no existe', E_USER_NOTICE);
            return false;
        }



        @session_start();
        $controller = new $controllerName();
        $controller->$actionName();
    }

}

?>