<?php

    class Gestor{
        private $db;

        function __construct(){
            $this->db=Connection::getInstance()->getconn();
        }

        public function listar(){
            $lista=[];
            $consulta='SELECT * FROM juegos';
            $stmt=$this->db->query($consulta);
            $variantesAccion=['Acción','Accion','acción','accion'];
            while($value=$stmt->fetch(PDO::FETCH_ASSOC)){
                if(in_array($value['genero'],$variantesAccion)){
                    $juego=new Accion(
                        $value['nombre'],
                        $value['duracion'],
                        $value['tipoAccion'],
                        $value['tipoArma'],
                        $value['id']
                    );
                }else{
                    $juego=new Terror(
                        $value['nombre'],
                        $value['duracion'],
                        $value['tipoTerror'],
                        $value['tipoVista'],
                        $value['id']
                    );
                }
                $lista[]=$juego;
            }
            return $lista;
        }
    }

?>