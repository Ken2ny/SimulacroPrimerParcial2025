<?php

require_once "Cliente.php";
require_once "Moto.php";
require_once "Venta.php";
require_once "Empresa.php";

//Clientes
$objcliente1 = new Cliente("Lucas", "Hoomann", "activo", "masculino", "32044233");
$objcliente2 = new Cliente("Julian", "Rashford", "activo","masculino", "23344044");

echo "Clientes: \n";
echo $objcliente1 . "\n";
echo $objcliente2 . "\n";
//Motos
$moto1 = new Moto(11, "2230000", 2022, "Benelli Imperiale 400", 85,"activa");
$moto2 = new Moto(12, "584000", 2021, "Zanella Zr 150 Ohc", 70,"activa");
$moto3 = new Moto(13, "999900", 2023, "Zanella Patagonian Eagle 250", 55,"falso");

echo "//////////////////////////\n";
echo "Lista de motos: \n";
echo "Moto 1: " . $moto1->getDescripcion() . "\n";
echo "Moto 2: " . $moto2->getDescripcion() . "\n";
echo "Moto 3: " . $moto3->getDescripcion() . "\n";
//Empresa
$empresa = new Empresa("Alta Gama","Av Argenetina 123",[$objcliente1,$objcliente2],[$moto1, $moto2, $moto3],[]);

$precioVenta1 = $empresa->registrarVenta([11, 12, 13], $objcliente2);
$precioVenta2 = $empresa->registrarVenta([0], $objcliente2);
$precioVenta3 = $empresa->registrarVenta([2], $objcliente2);

echo "////////////////////////////\n";
echo "Precio Venta 1: " . $precioVenta1 . "\n";
echo "Precio Venta 2: " . $precioVenta2 . "\n";
echo "Precio Venta 3: " . $precioVenta3 . "\n";

echo "Ventas de Cliente 1: \n";
$ventaTotal1 = $empresa->retornarVentasXCliente($objcliente1->getTipo(), $objcliente1->getDocumento());
if (count($ventaTotal1)> 0) {
    foreach ($ventaTotal1 as $venta){
        echo $venta . "\n";
    }
}
echo "Ventas de Cliente 2: \n";
$ventaTotal2 = $empresa->retornarVentasXCliente($objcliente2->getTipo(), $objcliente2->getDocumento());
if (count($ventaTotal2) > 0){
    foreach ($ventaTotal2 as $venta){
        echo $venta . "\n";
    }
}

echo "Empresa\n";
echo $empresa;

