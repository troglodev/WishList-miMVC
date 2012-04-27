<?php

//******CLASES
$array_classes = array('libs/SPDO.php',
    'libs/ControllerBase.php',
    'libs/ModelBase.php',
    'libs/View.php',
    'libs/Valida.php',
    'libs/Config.php',);


//******RUTAS
//Ini Parametros BBDD
define('CONFIG_BD_INI', 'config/bd.ini');


//RUTAS MVC
define('BOOTSTRAP', 'index.php?');
define('RUTA_MODELOS', 'models/');
define('RUTA_VISTAS', 'views/');
define('RUTA_CONTROLADORES', 'controllers/');
define('NOMBRE_CONTROLADOR', 'controlador=');
define('NOMBRE_ACCION', '&accion=');



//INC de HTML
define('RUTA_HTML', 'views/html/');
define('HTML_ACCESO', RUTA_HTML . 'acceso.inc.php');
define('HTML_DERECHA', RUTA_HTML . 'derecha.inc.php');
define('HTML_HEAD', RUTA_HTML . 'head.inc.php');
define('HTML_PIE', RUTA_HTML . 'pie.inc.php');


//ACTIONS DE LOS FORMULARIOS
define('ACTION_USUARIO_NUEVO', BOOTSTRAP . NOMBRE_CONTROLADOR . 'usuario' . NOMBRE_ACCION . 'registrar');
define('ACTION_USUARIO_MOSTRARFORM', BOOTSTRAP . NOMBRE_CONTROLADOR . 'usuario' . NOMBRE_ACCION . 'mostrarFormulario');
define('ACTION_USUARIO_DESCONECTAR', BOOTSTRAP . NOMBRE_CONTROLADOR . 'usuario' . NOMBRE_ACCION . 'desconectar');
define('ACTION_USUARIO_ACCEDER', BOOTSTRAP . NOMBRE_CONTROLADOR . 'usuario' . NOMBRE_ACCION . 'acceder');

define('ACTION_DESEO_GUARDAR', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'guardar');
define('ACTION_DESEO_GUARDAR_ID', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION.'guardar&id=');
define('ACTION_DESEO_MOSTRAR', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION.'mostrar');
define('ACTION_DESEO_MOSTRARCUMPLIDOS', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'mostrarCumplidos');
define('ACTION_DESEO_NUEVO', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'nuevo');
define('ACTION_DESEO_EDITAR_ID', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'editar&id=');
define('ACTION_DESEO_ELIMINAR_ID', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'eliminar&id=');
define('ACTION_DESEO_CUMPLIR_ID', BOOTSTRAP . NOMBRE_CONTROLADOR . 'deseo' . NOMBRE_ACCION . 'cumplir&id=');


//MODELOS
define('MODELO_DESEO', 'DeseoModel.php');
define('MODELO_USUARIO', 'UsuarioModel.php');


//VISTAS
define('VISTA_DESEO_REGISTRAR','deseo/deseoRegistrar.php');
define('VISTA_DESEO_MOSTRAR','deseo/deseoMostrar.php');
define('VISTA_DESEO_MOSTRARCUMPLIDOS','deseo/deseoMostrarCumplidos.php');
define('VISTA_DESEO_EDITAR','deseo/deseoEditar.php');
define('VISTA_USUARIO_REGISTRAR', 'usuario/usuarioRegistrar.php');
define('VISTA_INICIO', 'default/index.php');


//CONTROLADORES
define('CONTROLADOR_INICIO', 'indexController');


//ACCIONES DE LOS CONTROLADORES
define('ACCION_INDEX','index');
define('ACCION_NUEVO_DESEO', 'nuevoDeseo');
define('ACCION_MOSTRAR_DESEO', 'mostrarDeseo');
define('ACCION_MOSTRAR_CUMPLIDOS', 'mostrarCumplidos');
define('ACCION_EDITAR_DESEO', 'editarDeseo');
define('ACCION_MODIFICAR_DESEO', 'modificarDeseo');
define('ACCION_CUMPLIR_DESEO', 'cumplirDeseo');
define('ACCION_INSERTAR_DESEO', 'insertarDeseo');
define('ACCION_ELIMINAR_DESEO', 'eliminarDeseo');

?>