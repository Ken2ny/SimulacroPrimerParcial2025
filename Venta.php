<?php

class Venta{

    private $numero;
    private $fecha;
    private $referenciaCliente;
    private $Coleccion;
    private $precioFinal;

    public function __construct($numero, $fecha, $referenciaCliente, $Coleccion, $precioFinal){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->referenciaCliente = $referenciaCliente;
        $this->Coleccion = [];
        $this->precioFinal = 0;
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
    public function setColeccion($Coleccion){
        $this->Coleccion = $Coleccion;
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
    public function getColeccion(){
        return $this->Coleccion;
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
        "Referencia a la Coleccion: " .  $this->getColeccion() . "\n";
    }
    //Verifica si la moto esta en stock, si esta la agrega a la coleccion y el precio de la moto se acumula al precio final
    public function incorporarMoto($objMoto){
        if ($objMoto->verificarDisponibilidad()){
            $this->Coleccion[] = $objMoto;

            $this->precioFinal += $objMoto->darPrecioVenta();
        
            return true;
        }
        return false;
    }























}