<?php 

class Horas {

    private $dias;
    private $horas;

    public function __construct($dias, $datos){
        $this->dias = $dias;
        $this->horas = [];

        foreach($this->dias as $dia) {
            $this->horas[$dia] = intval($datos[$dia] ?? 0);
        }
    }

    public function getHoras(){
        return $this->horas;
    }

    public function contarHoras(){
        $cantHoras = 0;
        foreach($this->getHoras() as $horasDia) {
            $cantHoras += $horasDia;
        }
        return $cantHoras;
    }

    
}

?>