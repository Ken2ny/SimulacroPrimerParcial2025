<?php

require_once "Cliente.php";
require_once "Moto.php";
require_once "Venta.php";
require_once "Empresa.php";

//Clientes
$cliente1 = new Cliente("Lucas", "Hoomann", "activo", "masculino", "32044233");
$cliente2 = new Cliente("Julian", "Rashford", "activo","masculino", "23344044");

//Motos
$moto1 = new Moto(11, "2230000", 2022, "Benelli Imperiale 400", 85,"activa");
$moto2 = new Moto(12, "584000", 2021, "Zanella Zr 150 Ohc", 70,"activa");
$moto3 = new Moto(13, "999900", 2023, "Zanella Patagonian Eagle 250", 55,"falso");

//Empresa
$empresa = new Empresa("Alta Gama","Av Argenetina 123",[$moto1, $moto2, $moto3],[$cliente1,$cliente2],[]);

$empresa->registrarVenta([11, 12, 13], $cliente2);
echo $empresa;