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
    }

?>