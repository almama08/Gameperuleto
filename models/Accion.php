<?php
class Accion extends Juego{
    private $tipoAccion;
    private $tipoArma;


    function __construct($nombre, $duracion, $tipoAccion, $tipoArma, $id=null){
        parent::__construct($nombre,$duracion,$id);
        $this->tipoAccion=$tipoAccion;
        $this->tipoArma=$tipoArma;
    }

    public function getTipoAccion(){
        return $this->tipoAccion;
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

    public function getGenero(){
        $aux="Acción";
        return $aux;
    }
}

?>