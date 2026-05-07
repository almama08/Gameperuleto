<?php

require_once 'autoload.php';

$gestor=new Gestor();
$juegoController=new JuegoController($gestor);
$usuarioController = new UsuarioController($gestor);

$accion=$_GET['accion'] ?? 'index';

switch($accion){
    //opciones gestión usuarios
    case 'login':
        $usuarioController->login();
        break;
    case 'registrarse':
        $usuarioController->registrarse();
        break;
    case 'logout':
        $usuarioController->logout();
        break;    
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