<?php

class DeseoController extends ControllerBase {

    private $fecha;
    private $descripcion;
    private $id = null;
    private $variables;

    public function mostrar() {
        $this->variables['items'] = $this->modelo->getPendingWishes();
        $this->view->show(VISTA_DESEO_MOSTRAR, $this->variables);
    }

    public function mostrarCumplidos() {
        $this->variables['items'] = $this->modelo->getDoneWishes();
        $this->view->show(VISTA_DESEO_MOSTRARCUMPLIDOS, $this->variables);
    }

    public function nuevo($mensaje = null) {
        $this->view->show(VISTA_DESEO_REGISTRAR, $mensaje);
    }

    public function editar() {
        $this->variables['items'] = $this->modelo->getWishById();
        $this->view->show(VISTA_DESEO_EDITAR, $this->variables);
    }

    public function guardar() {
        self::set();
        $this->variables = $this->validator->formWish();
        if ($this->id == null) {
            if (!empty($this->variables['mensaje'])) {
                $this->view->show(VISTA_DESEO_REGISTRAR, $this->variables);
            } else {
                $this->insertarDeseo();
            }
        } else {
            if (!empty($this->variables['mensaje'])) {
                $this->editar();
            } else {
                $this->modificarDeseo();
            }
        }
    }

    public function modificarDeseo() {
        if ($this->modelo->modifyWish()) {
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        }
    }

    public function cumplir() {
        if ($this->modelo->setWishAsDone()) {
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        }
    }

    public function insertarDeseo() {
        if ($this->modelo->insertarDeseoBD()) {
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        }
    }

    public function eliminar() {
        if ($this->modelo->eliminarDeseoBD()) {
            $this->cambiaHeader(ACTION_DESEO_MOSTRAR);
        }
    }

    public function __construct() {
        parent::__construct();
        require(RUTA_MODELOS . MODELO_DESEO);
        $this->modelo = new DeseoModel();
    }

    public function set() {
        $this->fecha = $_POST['fecha'];
        $this->descripcion = $_POST['descripcion'];
        @$this->id = $_POST['id'];
    }

}

?>
