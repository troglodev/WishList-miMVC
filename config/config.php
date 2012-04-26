<?php

//******BBDD
        //const DSN = 'mysql:host=localhost;dbname=wishlist';
        //const USERNAME = 'root';
        //const PASSWORD = '';

//******RUTAS
        const RUTA_MODELOS = 'models/';
        const RUTA_CONTROLADORES = 'controllers/';
        const RUTA_INC = 'views/html/';
        const BOOTSTRAP = 'index.php?';
        const URL_CONTROLADOR = 'controlador=';
        const URL_ACCION = '&accion=';
        const URL_INICIO = 'default/index.php';

        const ACTION_USUARIO_NUEVO = 'index.php?controlador=usuario&accion=registrar';
        const ACTION_USUARIO_MOSTRARFORM = 'index.php?controlador=usuario&accion=mostrarFormulario';
        const ACTION_USUARIO_DESCONECTAR='index.php?controlador=usuario&accion=desconectar';
        const ACTION_USUARIO_ACCEDER='index.php?controlador=usuario&accion=acceder';
        const ACTION_DESEO_GUARDAR = 'index.php?controlador=deseo&accion=guardar';
        const ACTION_DESEO_GUARDAR_ID = 'index.php?controlador=deseo&accion=guardar&id=';

        const ACTION_DESEO_MOSTRAR='index.php?controlador=deseo&accion=mostrar';
        const ACTION_DESEO_MOSTRARCUMPLIDOS='index.php?controlador=deseo&accion=mostrarCumplidos';
        const ACTION_DESEO_NUEVO='index.php?controlador=deseo&accion=nuevo';


        const ACTION_DESEO_EDITAR_ID = 'index.php?controlador=deseo&accion=editar&id=';
        const ACTION_DESEO_ELIMINAR_ID = 'index.php?controlador=deseo&accion=eliminar&id=';
        const ACTION_DESEO_CUMPLIR_ID = 'index.php?controlador=deseo&accion=cumplir&id=';

//******INC de HTML
        const HTML_ACCESO = 'acceso.inc.php';
        const HTML_DERECHA = 'derecha.inc.php';
        const HTML_HEAD = 'head.inc.php';
        const HTML_PIE = 'pie.inc.php';

//******VISTAS
        const VISTA_USUARIO_REGISTRAR='usuario/usuarioRegistrar.php';





//******MODELOS
        const MODELO_DESEO = 'DeseoModel.php';
        const MODELO_USUARIO = 'UsuarioModel.php';

//******ACCIONES


        const ACCION_NUEVO_DESEO = 'nuevoDeseo';
        const ACCION_MOSTRAR_DESEO = 'mostrarDeseo';
        const ACCION_MOSTRAR_CUMPLIDOS = 'mostrarCumplidos';
        const ACCION_EDITAR_DESEO = 'editarDeseo';
        const ACCION_MODIFICAR_DESEO = 'modificarDeseo';
        const ACCION_CUMPLIR_DESEO = 'cumplirDeseo';
        const ACCION_INSERTAR_DESEO = 'insertarDeseo';
        const ACCION_ELIMINAR_DESEO = 'eliminarDeseo';

//******CONTROLADORES
        const CONTROLADOR_DESEO = 'deseoController.php';
        const CONTROLADOR_INICIO = 'inicioController.php';
        const CONTROLADOR_USUARIO = 'usuarioController.php';



        const CONTROLADOR_PREDEFINIDO = "inicio";
        const ACCION_PREDEFINIDA = "mostrarInicio";

//const ruta_inc = 'inc/';
        const RUTA_DBH = 'core/bd.php';
        const RUTA_VISTAS = 'views/default/';
        const RUTA_IMAGENES = 'views/estatico/img/';

/*
  function getConfig($seccion) {
  $data = parse_ini_file('../config/config.ini', true);
  return $data[$seccion];
  }
 */
?>