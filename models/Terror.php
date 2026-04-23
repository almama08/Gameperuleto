<?php
class Terror extends Juego{
    private $tipoTerror;
    private $tipoVista;


    function __construct($genero, $duracion, $nombre, $tipoTerror, $tipoVista, $id=null){
        $this->id=$id;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->nombre=$nombre;
        $this->tipoTerror=$tipoTerror;
        $this->tipoVista=$tipoVista;
    }

    public function getTipoTerror(){
        return $this->tipoTerror;
    }

    public function setTipoTerror($tipoTerror){
        $this->tipoTerror = $tipoTerror;
    }

    public function getTipoVista(){
        return $this->tipoVista;
    }

    public function setTipoVista($tipoVista){
        $this->tipoVista = $tipoVista;
    }
}

?>