<?php

require_once "Cliente.php";
require_once "Moto.php";
require_once "Venta.php";


$cliente = new Cliente("Lucas", "Hergerberg", "activo","Masculino", "34223456");
echo $cliente;
