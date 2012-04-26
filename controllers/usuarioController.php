<?php

class UsuarioController extends ControllerBase {

    private $usuario;
    private $password1; // = $_POST['userpassword'];
    private $password2; // = $_POST['userpassword2'];
    private $email; // = $_POST['email'];
    private $valida;

    public function mostrarFormulario($parametros = null) {
        $this->view->show(VISTA_USUARIO_REGISTRAR, $parametros);
    }

    public function registrar() {
        self::set();
        $this->valida = Valida::singleton();
        $variables = $this->valida->formUserRegister();

        if (!empty($variables['mensaje'])) {
            $this->mostrarFormulario($variables);
        } else {
            $this->registrarBD();
        }
    }

    public function registrarBD() {
        require RUTA_MODELOS . MODELO_USUARIO;
        $model = new UsuarioModel();
        if (!$model->existeUsuario($this->usuario)) {
            $model->insertarUsuario($this->usuario, $this->password1);
            $this->cambiaHeader('' . ACTION_DESEO_MOSTRAR);
        } else {
            $parametros = array('mensaje' => 'El usuario ya existe');
            $this->mostrarFormulario($parametros);
        }
    }

    public function acceder() {
        self::set();
        $this->valida = Valida::singleton();
        $variables = $this->valida->formUserAccess();

        if (!empty($variables['mensaje'])) {
            $this->view->show(URL_INICIO, $variables);
        } else {
            $this->login();
        }
    }

    public function login() {
        require RUTA_MODELOS . MODELO_USUARIO;
        $model = new UsuarioModel();
        if ($model->validacionCorrecta($this->usuario, $this->password1)) {
            $_SESSION['user'] = $this->usuario;
            $this->cambiaHeader('' . ACTION_DESEO_MOSTRAR);
        } else {
            $parametros = array('mensaje' => 'No existe el usuario.');
            $this->view->show(URL_INICIO, $parametros);
        }
    }

    public function desconectar() {
        if (isset($_SESSION['user'])) {
            session_unset();
            session_destroy();
            $this->view->show(URL_INICIO);
        }
    }

    public function set() {
        @$this->usuario = $_POST['user'];
        @$this->password1 = $_POST['userpassword'];
        @$this->password2 = $_POST['userpassword2'];
        @$this->email = $_POST['email'];
    }

    public function cambiaHeader($ruta) {
        header('Location: ' . $ruta);
    }

}

?>
