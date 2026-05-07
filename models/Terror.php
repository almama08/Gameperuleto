<?php
class Terror extends Juego{
    private $tipoTerror;
    private $tipoVista;


    function __construct($nombre, $duracion, $tipoTerror, $tipoVista, $id=null){
        parent::__construct($nombre,$duracion,$id);
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