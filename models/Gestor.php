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

            
            $stmt->bindValue(':nombre', $juego->getNombre());
            $stmt->bindValue(':duracion', $juego->getDuracion());
            $stmt->bindValue(':genero', $juego->getGenero());
            $stmt->bindValue(':tipoAccion', $tipoAccion);
            $stmt->bindValue(':tipoArma', $tipoArma);
            $stmt->bindValue(':tipoTerror', $tipoTerror);
            $stmt->bindValue(':tipoVista', $tipoVista);

            return $stmt->execute();
        }

        public function eliminar($id){
            $sql='DELETE FROM juegos WHERE id=:id';
            $stmt=$this->db->prepare($sql);
            $stmt->bindValue(':id',$id);
            return $stmt->execute();
        }

        public function editar($juego) {
            $sql="UPDATE juegos SET nombre=:nombre, duracion=:duracion, genero=:genero, tipoAccion=:tipoAccion, tipoArma=:tipoArma WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $genero=get_class($juego);

            $tipoArma=null;
            $tipoAccion=null;
            $tipoTerror=null;
            $tipoVista=null;

            if($juego instanceof Accion){
                $sql="UPDATE juegos SET nombre=:nombre, duracion=:duracion, genero=:genero, tipoAccion=:tipoAccion, tipoArma=:tipoArma WHERE id = :id";
                $tipoArma=$juego->getTipoArma();
                $tipoAccion=$juego->getTipoAccion();
            }elseif($juego instanceof Terror){
                 $sql="UPDATE juegos SET nombre=:nombre, duracion=:duracion, genero=:genero, tipoTerror=:tipoTerror, tipoVista=:tipoVista WHERE id = :id";
                $tipoTerror=$juego->getTipoTerror();
                $tipoVista=$juego->getTipoVista();
            }


            $stmt->bindValue(':nombre', $juego->getNombre());
            $stmt->bindValue(':duracion', $juego->getDuracion());
            $stmt->bindValue(':genero', $juego->getGenero());
            $stmt->bindValue(':tipoAccion', $tipoAccion);
            $stmt->bindValue(':tipoArma', $tipoArma);
            $stmt->bindValue(':tipoTerror', $tipoTerror);
            $stmt->bindValue(':tipoVista', $tipoVista);

            return $stmt->execute();
        }

    }

?>