<?php

class Valida {

    private static $instance = null;
    private $usuario;
    private $password1;
    private $password2;
    private $email;
    private $fecha;
    private $descripcion;
    private $id;
    private $mensaje;

    public static function singleton() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        @$this->usuario = $_POST['user'];
        @$this->password1 = $_POST['userpassword'];
        @$this->password2 = $_POST['userpassword2'];
        @$this->email = $_POST['email'];
        @$this->fecha = $_POST['fecha'];
        @$this->descripcion = $_POST['descripcion'];
        @$this->id = $_POST['id'];
        $this->mensaje = '';
    }

    public function formWish() {
        $this->descripcion = filter_var($this->descripcion, FILTER_SANITIZE_STRING);
        if (empty($this->descripcion))
            $this->mensaje.='Rellene la descripción.<br/>';

        if (empty($this->fecha))
            $this->mensaje.= 'Rellene la fecha.<br/>';

        @$array_fecha = explode('-', $this->fecha);
        if (!@checkdate($array_fecha[1], $array_fecha[0], $array_fecha[2]))
            $this->mensaje.= 'Introduzca una fecha correcta.<br/>';

        return array('mensaje' => $this->mensaje,
            'fecha' => $this->fecha,
            'descripcion' => $this->descripcion,
            'id' => $this->id
        );
    }

    public function formUserAccess() {
        $this->usuario = filter_var($this->usuario, FILTER_SANITIZE_STRING);
        $this->password1 = filter_var($this->password1, FILTER_SANITIZE_STRING);

        if (empty($this->usuario) || empty($this->password1))
            return array('mensaje' => 'Rellene todos los campos.<br/>');
    }

    public function formUserRegister() {
        $this->usuario = filter_var($this->usuario, FILTER_SANITIZE_STRING);
        $this->password1 = filter_var($this->password1, FILTER_SANITIZE_STRING);
        $this->password2 = filter_var($this->password2, FILTER_SANITIZE_STRING);
        $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);

        if (empty($this->usuario) || empty($this->password1) || empty($this->password2) || empty($this->email)) {
            $this->mensaje.= 'Rellene todos los campos.<br/>';
        } else {
            if (strlen($this->usuario) < 6) {
                $this->mensaje.= 'El nombre debe tener al menos 6 caracteres.<br/>';
            }
            $paux = str_replace(' ', '', $this->password1);
            if (strlen($this->password1) != strlen($paux)) {
                $this->mensaje.= 'La contraseña no puede contener espacios.<br/>';
            }
            if (strlen($this->password1) < 6) {
                $this->mensaje.= 'La contraseña debe tener al menos 6 caracteres.<br/>';
            }
            if (strcmp($this->password1, $this->password2) != 0) {
                $this->mensaje.= 'Las contraseñas no coinciden.<br/>';
            }
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->mensaje.= 'Escriba una direccion de email correcta.<br/>';
            }
        }
        return array('mensaje' => $this->mensaje,
            'usuario' => $this->usuario,
            'email' => $this->email
        );
    }

}

?>
