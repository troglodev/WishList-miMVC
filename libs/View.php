<?php

class View {

    function __construct() {

    }

    public function show($name, $variables =null) {
        $path = 'views/' . $name;
        if (file_exists($path) == false) {
            trigger_error('Template `' . $path . '` does not exist.', E_USER_NOTICE);
            return false;
        }
        /*
        if (is_array($vars)) {
            foreach ($vars as $key => $value) {
                $$key = $value;
            }
        }
*/
        require_once  HTML_HEAD;
        require_once  HTML_ACCESO;

        include($path);
    }

}

/*
  El uso es bastante sencillo:
  $vista = new View();
  $vista->show('listado.php', array("nombre" => "Juan"));
 */
?>