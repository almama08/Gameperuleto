<?php

require_once 'autoload.php';

$juegoController=new JuegoController($gestor);

$accion=$_GET['accion'] ?? 'index';

switch($accion){
    //opciones gestión usuarios
    //opciones gestión juegos
    case 'editar':
        $juegoController->editar();
        break;
    case 'eliminar':
        $juegoController->eliminar();
        break;
    case 'añadirTerror':
        $juegoController->añadirTerror();
        break;
    case 'añadirAccion':
        $juegoController->añadirAccion();
        break;
    case 'añadir':
        $juegoController->añadir();
        break;
    default:
        $juegoController->index();
        break;
}

?>