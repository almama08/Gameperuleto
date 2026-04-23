<?php
class Juego{}
    protected $id;
    protected $genero;
    protected $duracion;
    protected $nombre;

    function __construct($genero, $duracion, $nombre, $id=null){
        $this->id=$id;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->nombre=$nombre;

    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getDuracion(){
        return $this->duracion;
    }

    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    }

    

?>