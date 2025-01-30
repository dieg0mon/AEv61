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