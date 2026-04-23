<<?php
class Accion extends Juego{
    private $tipoAccion;
    private $tipoArma;


    function __construct($genero, $duracion, $nombre, $tipoAccion, $tipoArma, $id=null){
        $this->id=$id;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->nombre=$nombre;
        $this->tipoAccion=$tipoAccion;
        $this->tipoArma=$tipoArma;
    }

    public function getTipoAccion(){
        return $this->getTipoAccion;
    }

    public function setTipoAccion($tipoAccion){
        $this->tipoAccion = $tipoAccion;
    }

    public function getTipoArma(){
        return $this->tipoArma;
    }

    public function setTipoArma($tipoArma){
        $this->tipoArma = $tipoArma;
    }
}

?>