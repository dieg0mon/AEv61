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
    
    
}

class Baloncesto extends Deporte {
    

}

class Rugby extends Deporte {
    
    
}

?>