<?php
class ProductoFresco extends Producto {
    
    private $fechaEnvasado;
    private $paisOrigen;

    public function __construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen){
        parent::__construct($fechaCaducidad, $numerolote);
        $this->fechaEnvasado = $fechaEnvasado;
        $this->paisOrigen = $paisOrigen;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Fecha de envasado {$this->fechaEnvasado}, y pais de origen: {$this->paisOrigen}<br>";
    }

}
?>