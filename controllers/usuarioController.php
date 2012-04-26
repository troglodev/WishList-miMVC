<?php

class UsuarioController extends ControllerBase {

    private $usuario;
    private $password1;
    private $password2;
    private $email;

    /**
     *
     * @param Array $parametros
     */
    public function mostrarFormulario($parametros = null) {
        $this->view->show(VISTA_USUARIO_REGISTRAR, $parametros);
    }

    public function registrar() {
        self::set();
        $this->variables= $this->validator->formUserRegister();
        if (!empty($this->variables['mensaje'])) {
            $this->mostrarFormulario($this->variables);
        } else {
            $this->registrarBD();
        }
    }

    public function registrarBD() {
        if (!$this->modelo->existeUsuario($this->usuario)) {
            $this->modelo->insertarUsuario($this->usuario, $this->password1);
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        } else {
            $this->variables['mensaje'] =  'El usuario ya existe';
            $this->mostrarFormulario($this->variables['mensaje']);
        }
    }

    public function acceder() {
        self::set();
        $this->variables = $this->validator->formUserAccess();
        if (!empty($this->variables['mensaje'])) {
            $this->view->show(URL_INICIO, $this->variables);
        } else {
            $this->login();
        }
    }

    public function login() {
        if ($this->modelo->validacionCorrecta($this->usuario, $this->password1)) {
            $_SESSION['user'] = $this->usuario;
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        } else {
            $this->variables['mensaje'] =  'No existe el usuario.';
            $this->view->show(URL_INICIO, $this->variables);
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

    public function __construct() {
        parent::__construct();
        require(RUTA_MODELOS . MODELO_USUARIO);
        $this->modelo = new UsuarioModel();
    }

}

?>
