<?php
class ProductoCongeladoPorAire extends ProductoCongelado {
    
    private $compoAire;

    public function __construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento, $compoAire){
        parent::__construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento);
        $this->compoAire = $compoAire;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Composicion del aire: {$this->compoAire}<br>";
    }

}
?>