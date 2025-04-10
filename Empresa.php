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
        $this->direccion = $denominacion;
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
    //TO STRING
    public function __toString()
    {
        return
        "Denominacion: $this->denominacion \n" . 
        "Direccion : $this->direccion \n" . 
        "Coleccion Cliente: " . $this->coleccionCliente . "\n" . 
        "Coleccion de Motos: " . $this->coleccionMoto . "\n" . 
        "Ventas Totales: " . $this->ventas . "\n";
    }

    public function retornarMoto($codigoMoto){        
        foreach ($this->coleccionMoto as $objMoto){
            if ($objMoto->getCodigo() == $codigoMoto){
                return $objMoto;
            }
        }
        return null;
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        
        $venta = new Venta($numero,$fecha,$objCliente, [], 0);

        foreach($colCodigosMoto as $codigoMoto){
            $objMoto = $this->retornarMoto($codigoMoto);
        if ($objMoto !==null && $objMoto->verificarDisponibilidad()){
            $venta->incorporarMoto($objMoto);
        }
        }
       if(count($venta->getColeccionMoto())> 0){
        $this->ventas[] = $venta;
        return $venta->getPrecioFinal();   
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
    }
















}
