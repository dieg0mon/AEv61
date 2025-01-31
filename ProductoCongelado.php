<?php
class ProductoCongelado extends Producto {
    
    private $fechaEnvasado;
    private $paisOrigen;
    private $tempMantenimiento;

    public function __construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento){
        parent::__construct($fechaCaducidad, $numerolote);
        $this->fechaEnvasado = $fechaEnvasado;
        $this->paisOrigen = $paisOrigen;
        $this->tempMantenimiento = $tempMantenimiento;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Fecha de envasado {$this->fechaEnvasado}, pais de origen: {$this->paisOrigen}, temperatura de mantenimiento recomendada: {$this->tempMantenimiento}<br>";
    }

}
?>