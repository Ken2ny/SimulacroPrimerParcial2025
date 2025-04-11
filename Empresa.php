<?php

class Empresa{

    private $denominacion;
    private $direccion;
    private $coleccionCliente;
    private $coleccionMoto;
    private $ventas;

    public function __construct($denominacion,$direccion,$coleccionCliente,$coleccionMoto, $ventas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->coleccionCliente = $coleccionCliente;
        $this->coleccionMoto = $coleccionMoto;
        $this->ventas = $ventas;
    }
    //SET
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setColeccionCliente($coleccionCliente){
        $this->coleccionCliente = $coleccionCliente;
    }
    public function setColeccionMoto($coleccionMoto){
        $this->coleccionMoto = $coleccionMoto;
    }
    public function setVentas($ventas){
        $this->ventas = $ventas;
    }
    //GET
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getColeccionCliente(){
        return $this->coleccionCliente;
    }
    public function getColeccionMoto(){
        return $this->coleccionMoto;
    }
    public function getVentas(){
        return $this->ventas;
    }
    //METODOS
    public function retornarMoto($codigoMoto){        
        foreach ($this->coleccionMoto as $objMoto){
            if ($objMoto->getCodigo() == $codigoMoto){
                return $objMoto;
            }
        }
        return null;
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        if ($objCliente->verificarBaja()){
            return 0;
        }

        $compra = new Venta(count($this->ventas) + 1, 2025, $objCliente,[],0);

        foreach($colCodigosMoto as $codigoMoto){
            $objMoto = $this->retornarMoto($codigoMoto);
        if ($objMoto !==null && $objMoto->verificarDisponibilidad()){
            $compra->incorporarMoto($objMoto);
        }
        }
       if(count($compra->getColeccion())> 0){
        $this->ventas[] = $compra;
        return $compra->getPrecioFinal();   
    }
       return 0;
    }

    public function retornarVentasXCliente($tipo,$numDoc){
    $ventasUnCliente = [];
    foreach($this->ventas as $venta){
        $cliente = $venta->getRefCliente();
        if($cliente->getTipo() === $tipo && $cliente->getDocumento() === $numDoc){
            $ventasUnCliente[] = $venta;
        }    
    }
    return $ventasUnCliente;
    }
    
    //TO STRING
    public function __toString()
    {
    $cadena = (
        "----------------------------------------------------------------------------\n" .
        "Denominacion: " . $this->getDenominacion() . "\n" .
        "Direccion: " . $this->getDireccion() . "\n" .
        "Coleccion Cliente: \n" . 
        implode("\n", $this->getColeccionCliente()) . "\n" .
        "Coleccion de Motos: \n" . 
        implode("\n", $this->getColeccionMoto()) . "\n" . 
        "Ventas Totales \n" .
        implode("\n", $this->getVentas()) . "\n"
    );
    return $cadena;
    }
}
//Clase - Empresa

//Caracteristicas
//denominacion - direccion - Coleccion del Cliente - Coleccion Moto - ventas

//Metodos
//retornarMoto
//registrarVenta
//retornarVentasXCliente

//Variables usadas en metodos:
//$objCliente -> es el cliente
//$colCodigosMoto -> el codigo de la moto en la coleccion
//$objMoto -> es la moto
//$compra -> es la nueva compra de moto
//$ventasUnCliente -> es el total de veces comprada de un cliente
//$cliente -> cliente referido

//Implode, convierte un array en texto