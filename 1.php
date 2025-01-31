<?php

require_once 'Producto.php';
require_once 'ProductoFresco.php';
require_once 'ProductoRefrigerado.php';
require_once 'ProductoCongelado.php';
require_once 'ProductoCongeladoPorAire.php';
require_once 'ProductoCongeladoPorAgua.php';
require_once 'ProductoCongeladoPorNitrogeno.php';

$productoBase = new Producto("5/2/2025", "704030");
echo $productoBase->showInfo();

$productoFresco = new ProductoFresco("25/7/2025", "345664", "29/1/2025", "Marruecos");
echo $productoFresco->showInfo();

$productoRefrigerado = new ProductoRefrigerado("4/5/2025", "393334", "3003", "28/5/2025", "4º", "Belgica");
echo $productoRefrigerado->showInfo();

$productoCongelado = new ProductoCongelado("13/10/2028", "209411", "2/12/2022", "España", "-12º");
echo $productoCongelado->showInfo();

$productoCongeladoPorAire = new ProductoCongeladoPorAire("15/11/2028", "259912", "5/1/2021", "Francia", "-10º", "Nitrogeno: 79% Oxigeno: 10% Dioxido de carbono: 3% y 7% de vapor de agua");
echo $productoCongeladoPorAire->showInfo();

$productoCongeladoPorAgua = new ProductoCongeladoPorAgua("8/8/2059", "359799", "5/1/2021", "Brasil", "-2º", "20%");
echo $productoCongeladoPorAgua->showInfo();

$productoCongeladoPorNitrogeno = new ProductoCongeladoPorNitrogeno("22/4/2083", "103749", "8/5/2010", "Alemania", "-2º", "300");
echo $productoCongeladoPorNitrogeno->showInfo();
?>