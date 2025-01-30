<?php

class Deporte {

    private $numeroJugadores;
    private $minPorJuego;
    private $objetivo;

    public function __construct($numeroJugadores, $minPorJuego, $objetivo){
        $this->numeroJugadores = $numeroJugadores;
        $this->minPorJuego = $minPorJuego;
        $this->objetivo = $objetivo; 
    }

    public function getNumeroJugadores() {
        return $this->numeroJugadores;
    }

    public function getMinPorJuego() {
        return $this->minPorJuego;
    }

    public function getObjetivo() { 
        return $this->objetivo;
    }

    public function showInfo() {
        return "El número de jugadores por equipo es de {$this->numeroJugadores}, cada partido tiene una duración de {$this->minPorJuego} minutos, y el objetivo del deporte es: {$this->objetivo}.<br>";
    }
}

class Futbol extends Deporte {
    
    private $fechaEnvasado;
    

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

class Baloncesto extends Deporte {
    
    private $fechaEnvasado;
    

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

class Rugby extends Deporte {
    
    private $fechaEnvasado;
    

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