<?php

class Cliente
{

    private $nombre;
    private $apellido;
    private $baja;
    private $tipo;
    private $documento;

    public function __construct($nombre, $apellido, $baja, $tipo, $documento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->baja = $baja;
        $this->tipo = $tipo;
        $this->documento = $documento;
    }
    //set
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setBaja($baja){
        $this->baja = $baja;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setDocumento($documento){
        $this->documento = $documento;
    }
    //get
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getBaja(){
        return $this->baja;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getDocumento(){
        return $this->documento;
    }
    //METODOS
    public function verificarBaja(){
        if ($this->baja == "baja"){
            return true;
        } else {
            return false;
        }
    }
    //String
    public function __toString(){

        $cadena = ( 
        "----------------------------------------------------------------------------\n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Estado: " . $this->getBaja() . "\n" .
        "Tipo: " . $this->getTipo() . "\n" .
        "Documento: " . $this->getDocumento() . "\n"
        );
        return $cadena;
    }

}
//Clase - CLIENTE

//Caracteristicas
//Nombre - Apellido - Baja - Tipo - Documento

//Metodo
//VerificarBaja
//
//
//



