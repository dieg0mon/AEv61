<?php
class ProductoCongeladoPorNitrogeno extends ProductoCongelado {
    
    private $exposicion;

    public function __construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento, $exposicion){
        parent::__construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento);
        $this->exposicion = $exposicion;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Con una exposicion al nitrogeno de {$this->exposicion} segundos<br>";
    }

}
?>