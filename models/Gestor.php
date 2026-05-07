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

        public function añadir($juego){
            $sql='INSERT INTO juegos (nombre, duracion, genero, tipoAccion,
            tipoArma, tipoTerror, tipoVista)
            VALUES (:nombre, :duracion, :genero, :tipoAccion, :tipoArma,
            :tipoTerror, :tipoVista)';

            $stmt=$this->db->prepare($sql);

            $genero=get_class($juego);

            $tipoArma=null;
            $tipoAccion=null;
            $tipoTerror=null;
            $tipoVista=null;

            if($juego instanceof Accion){
                $tipoArma=$juego->getTipoArma();
                $tipoAccion=$juego->getTipoAccion();
            }elseif($juego instanceof Terror){
                $tipoTerror=$juego->getTipoTerror();
                $tipoVista=$juego->getTipoVista();
            }

            $stmt->execute([
                ':nombre'=>$juego->getNombre(),
                ':duracion'=>$juego->getDuracion(),
                ':genero'=>$genero,
                ':tipoAccion'=>$tipoAccion,
                ':tipoArma'=>$tipoArma,
                ':tipoTerror'=>$tipoTerror,
                ':tipoVista'=>$tipoVista
            ]);
        }
    }

?>