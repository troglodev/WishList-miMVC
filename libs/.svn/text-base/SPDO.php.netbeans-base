<?php

class SPDO extends PDO {

    private static $instance = null;

    public function __construct() {
        $config = Config::singleton();
        $dbuser = $config->get('bbdd', 'dbuser');
        $dbpassword = $config->get('bbdd', 'dbpass');
        $dbhost = $config->get('bbdd', 'dbhost');
        $dbname = $config->get('bbdd', 'dbname');
        $dbdriver = $config->get('bbdd', 'dbdriver');
        $dsn = $dbdriver . 'host=' . $dbhost . ';dbname=' . $dbname;
        parent::__construct($dsn, $dbuser, $dbpassword);
    }

    public static function singleton() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

?>