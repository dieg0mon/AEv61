<?php
class ProductoCongeladoPorAgua extends ProductoCongelado {
    
    private $salinidadAgua;

    public function __construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento, $salinidadAgua){
        parent::__construct($fechaCaducidad, $numerolote, $fechaEnvasado, $paisOrigen, $tempMantenimiento);
        $this->salinidadAgua = $salinidadAgua;
    }

    public function showInfo() {
        $infoProdInicial = parent::showInfo();
        return "{$infoProdInicial} Con una salinidad del agua del {$this->salinidadAgua}<br>";
    }

}
?>