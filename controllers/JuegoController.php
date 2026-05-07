<?php

    class JuegoController{
        private $gestor;

        function __construct($gestor){
            $this->gestor=$gestor;
        }

        public function index(){
            $lista=$this->gestor->listar();

            include 'views/listar.php';
        }

        public function añadir(){
            include 'views/añadir.php';
        }

        public function añadirAccion(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $juego=new Accion(
                    $_POST['nombre'],$_POST['duracion'],
                    $_POST['tipoAccion'],$_POST['tipoArma']
                );
                $this->gestor->añadir($juego);
                header('Location: index.php');
                exit;
            }
            include 'views/añadirAccion.php';
        }

        public function añadirTerror(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $juego=new Accion(
                    $_POST['nombre'],$_POST['duracion'],
                    $_POST['tipoTerror'],$_POST['tipoVista']
                );
                $this->gestor->añadir($juego);
                header('Location: index.php');
                exit;
            }
            include 'views/añadirTerror.php';
        }
    }

?>