<?php

class Moto{

    private $codigo;
    private $costo;
    private $anhoFabricacion;
    private $descripcion;
    private $porcentajeAnual;
    private $activa;

    public function __construct($codigo, $costo, $anhoFabricacion, $descripcion, $porcentajeAnual, $activa){
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anhoFabricacion = $anhoFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentajeAnual = $porcentajeAnual;
        $this->activa = $activa;
    }
    //set
    public function setCodigo($codigo){
        $this->codigo = $codigo; 
    }
    public function setCosto($costo){
        $this->costo = $costo; 
    }
    public function setFabricacion($anhoFabricacion){
        $this->anhoFabricacion = $anhoFabricacion; 
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion; 
    }
    public function setPorcentaje($porcentajeAnual){
        $this->porcentajeAnual = $porcentajeAnual; 
    }
    public function setActiva($activa){
        $this->activa = $activa; 
    }
    //get
    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getFabricacion(){
        return $this->anhoFabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcentaje(){
        return $this->porcentajeAnual;
    }
    public function getActiva(){
        return $this->activa;
    }
    //METODOS
    //VERIFICACION DE SI HAY STOCK DE LA MOTO
    public function verificarDisponibilidad(){
        if($this->activa == "activa"){
            return true;
        } else {
            return false;
        }
    }
    //VERIFICA SI HAY DISPONIBILIDAD, SI HAY SE CALCULA EL PRECIO SINO DA VALOR 0
    public function darPrecioVenta(){
        if($this->verificarDisponibilidad() == false){
            $venta = 0;
        } else {
            $anhoActual = date("Y");
            $anios = $anhoActual - $this->anhoFabricacion;
            $venta = $this->costo + $this->costo * ($anios * $this->porcentajeAnual);
        }
        return $venta;
    }
    public function __toString()
    {
    $cadena = ( 
        "----------------------------------------------------------------------------\n" .
        "Codigo: " . $this->getCodigo() . "\n" . 
        "Costo: " . $this->getCosto() . "\n" . 
        "Anho de Fabricacion: " . $this->getFabricacion() . "\n" . 
        "Descripcion: " . $this->getDescripcion() . "\n" . 
        "Porcentaje Anual: " . $this->getPorcentaje() . "\n" . 
        "Estado: " . $this->getActiva() . "\n" 
    );
    return $cadena;
    }
}
//Clase - Moto

//Caracteristicas
//Codigo - Costo - Anho de Fabricacion - Descripcion - PorcentajeAnual - Activa
//

//METODOS
//verificarDisponibilidad
//darPrecioVenta

//Variables usadas en Metodos:
//$venta
//$anios
//