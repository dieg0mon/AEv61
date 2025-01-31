<?php
class ProductoRefrigerado extends Producto {
    
    private $codigoOrganismo;
    private $fechaEnvasado;
    private $tempMantenimiento;
    private $paisOrigen;

    public function __construct($fechaCaducidad, $numerolote, $codigoOrganismo, $fechaEnvasado, $tempMantenimiento, $paisOrigen){
        parent::__construct($fechaCaducidad, $numerolote);
        $this->codigoOrganismo = $codigoOrganismo;
        $this->fechaEnvasado = $fechaEnvasado;
        $this->tempMantenimiento = $tempMantenimiento;
        $this->paisOrigen = $paisOrigen;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Codigo de organismo {$this->codigoOrganismo}, fecha de envasado: {$this->fechaEnvasado}, temperatura de mantenimiento recomendada: {$this->tempMantenimiento}, pais de origen: {$this->paisOrigen}<br>";
    }

}
?>