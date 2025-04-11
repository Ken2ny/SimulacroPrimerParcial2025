<?php

class Venta{

    private $numero;
    private $fecha;
    private $referenciaCliente;
    private $coleccion;
    private $precioFinal;

    public function __construct($numero, $fecha, $referenciaCliente,$coleccion, $precioFinal){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->referenciaCliente = $referenciaCliente;
        $this->coleccion = $coleccion; 
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
    public function setColeccion($coleccion){
        $this->coleccion = $coleccion;
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
        return $this->coleccion;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }
    //METODOS
    //Verifica si la moto esta en stock, si esta la agrega a la coleccion y el precio de la moto se acumula al precio final
    public function incorporarMoto($objMoto){
        if ($objMoto->verificarDisponibilidad()){
            $this->coleccion[] = $objMoto;

            $this->precioFinal += $objMoto->darPrecioVenta();
        
            return true;
        }
        return false;
    }
    public function __toString()
    {
        return
        "Numero: $this->numero \n" . 
        "Fecha: $this->fecha \n" . 
        "Referencia del Cliente: $this->referenciaCliente \n" . 
        "Referencia a la Coleccion: \n";
        implode("\n", $this->coleccion) . "\n";
        "Precio Final: " . $this->precioFinal . "\n";
    }

}
//Clase - Venta

//Caracteristicas
//Numero - fecha - referencia cliente - referenciaColeccion - PrecioFinal
//Metodos
//incorporarMoto

//Variables en metodos:
//$objMoto -> es la moto
//