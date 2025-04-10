<?php

class Venta{

    private $numero;
    private $fecha;
    private $referenciaCliente;
    private $referenciaColeccion;
    private $precioFinal;

    public function __construct($numero, $fecha, $referenciaCliente, $referenciaColeccion, $precioFinal){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->referenciaCliente = $referenciaCliente;
        $this->referenciaColeccion = $referenciaColeccion;
        $this->precioFinal = $precioFinal;
    }
    //SET
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setRefCliente($referenciaCliente){
        $this->referenciaCliente = $referenciaCliente;
    }
    public function setRefColeccion($referenciaColeccion){
        $this->referenciaColeccion = $referenciaColeccion;
    }
    public function setPrecioFinal($precioFinal){
        $this->precioFinal = $precioFinal;
    }
    //GET
    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getRefCliente(){
        return $this->referenciaCliente;
    }
    public function getRefColeccion(){
        return $this->referenciaColeccion;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }
    //METODOS
    public function __toString()
    {
        return
        "Numero: $this->numero \n" . 
        "Fecha: $this->fecha \n" . 
        "Referencia del Cliente: $this->referenciaCliente \n" . 
        "Referencia a la Coleccion: $this->referenciaColeccion \n";
    }
























}