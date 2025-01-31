<?php
class Producto {

private $fechacaducidad;
private $numerolote;

public function __construct($fechacaducidad, $numerolote){
    $this->fechacaducidad = $fechacaducidad;
    $this->numerolote = $numerolote;
}

public function getFechaCaducidad() {
    return $this->fechacaducidad;
}

public function getNumeroLote() {
    return $this->numerolote;
}

public function showInfo() {
    return "La fecha de caducidad de este producto es: {$this->fechacaducidad} y su numero de lote es: {$this->numerolote}<br>";
}

}
?>