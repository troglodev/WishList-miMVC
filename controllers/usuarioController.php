<?php

class UsuarioController extends ControllerBase {
    /*
      private $usuario;
      private $password1;
      private $password2;
      private $email;
     */

    public function acceder() {
        //self::set();
        $variables = $this->validator->formUserAccess();
        if (!empty($variables['mensaje'])) {
            $this->view->show(VISTA_INICIO, $variables);
        } else {
            $this->login();
        }
    }

    public function login() {
        $modelo = llamarModelo();
        if ($modelo->validacionCorrecta($_POST['user'], $_POST['password1'])) {

            $_SESSION['user'] = $_POST['user'];
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        } else {
            $variables['mensaje'] = 'No existe el usuario.';
            $this->view->show(VISTA_INICIO, $variables);
        }
    }

    public function desconectar() {
        if (isset($_SESSION['user'])) {
            session_unset();
            session_destroy();
        }
        $this->cambiaHeader('index.php');
    }

    public function mostrarFormulario($parametros = null) {
        $this->view->show(VISTA_USUARIO_REGISTRAR, $parametros);
    }

    public function registrar() {
        // self::set();
        $variables = $this->validator->formUserRegister();
        if (!empty($variables['mensaje'])) {
            $this->mostrarFormulario($variables);
        } else {
            $this->registrarBD();
        }
    }

    public function registrarBD() {
        $modelo = llamarModelo();
        if (!$modelo->existeUsuario($this->usuario)) {
            $modelo->insertarUsuario($this->usuario, $this->password1);
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        } else {
            $variables['mensaje'] = 'El usuario ya existe';
            $this->mostrarFormulario($variables['mensaje']);
        }
    }

    /*
      public function set() {
      $this->usuario = $_POST['user'];
      $this->password1 = $_POST['userpassword'];
      $this->password2 = $_POST['userpassword2'];
      $this->email = $_POST['email'];
      }
     */

    public function llamarModelo() {
        require(RUTA_MODELOS . MODELO_USUARIO);
        $modelo = new UsuarioModel();
        return $modelo;
    }

}

?>
