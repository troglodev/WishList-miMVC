<?php

class DeseoController extends ControllerBase {

    public function incluirRequireYSesion() {
        require RUTA_MODELOS . MODELO_DESEO;
        return new DeseoModel();
    }

    public function guardar() {
        $fecha = $_POST['fecha'];
        $desc = $_POST['descripcion'];
        $id = $_POST['id'];
        $valida = new Valida();
        $mensaje = $valida->formWish($fecha, $desc);
        //Nuevo
        if (!isset($id)) {
            if (!$mensaje) {
                $this->insertarDeseo();
            } else {
                $parametros = array('mensaje' => $mensaje,
                    'fecha' => $_POST['fecha'],
                    'descripcion' => $_POST['descripcion']
                );
                $this->view->show('deseo/deseoRegistrar.php', $parametros);
            }
        } else {
            //Edicion
            if (!$mensaje) {
                $this->modificarDeseo();
            } else {
                $parametros = array('mensaje' => $mensaje,
                    'fecha' => $_POST['fecha'],
                    'descripcion' => $_POST['descripcion']
                );
                $this->view->show('deseo/deseoEditar.php', $parametros);
            }
        }
    }

    public function mostrar() {
        $model = $this->incluirRequireYSesion();
        $items = $model->getPendingWishes();
        $this->view->show("deseo/deseoMostrar.php", $items);
    }

    public function mostrarCumplidos() {
        $model = $this->incluirRequireYSesion();
        $items = $model->getDoneWishes();
        $this->view->show("deseo/deseoMostrarCumplidos.php", $items);
    }

    public function nuevo($mensaje = null) {
        $this->view->show("deseo/deseoRegistrar.php", $mensaje);
    }

    /*     * *************************************** */

    public function editar() {
        $model = $this->incluirRequireYSesion();
        $items = $model->getWishById();
        $this->view->show("deseo/deseoEditar.php", $items);
    }

//update
    public function modificarDeseo() {
        $model = $this->incluirRequireYSesion();
        if ($model->modifyWish()) {
            header('Location: ' . BOOTSTRAP . URL_CONTROLADOR . 'deseo' . URL_ACCION . 'mostrar');
        }
    }

    public function cumplir() {
        $model = $this->incluirRequireYSesion();
        if ($model->setWishAsDone()) {
            header('Location: ' . BOOTSTRAP . URL_CONTROLADOR . 'deseo' . URL_ACCION . 'mostrar');
        }
    }

//insert
    public function insertarDeseo() {
        $model = $this->incluirRequireYSesion();
        if ($model->insertarDeseoBD()) {
            header('Location: ' . BOOTSTRAP . URL_CONTROLADOR . 'deseo' . URL_ACCION . 'mostrar');
        }
    }

//delete
    public function eliminar() {
        $model = $this->incluirRequireYSesion();
        if ($model->eliminarDeseoBD()) {
            header('Location: ' . BOOTSTRAP . URL_CONTROLADOR . 'deseo' . URL_ACCION . 'mostrar');
        }
    }

    public function __construct() {
        parent::__construct();
    }

    public static function singleton() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
private static $instance=null;
    /*
     * public function cabeceras(){

      header('Location: ' . BOOTSTRAP . URL_CONTROLADOR . 'deseo' . URL_ACCION . 'mostrar');
      }
     */
}

?>
