<?php 

class Tarifa {

    private $edad;
    private $esEstudiante; 
    
    public function __construct($info)
    {
        $this->edad = $info['edad'];
        $this->esEstudiante = $info['estudiante'] == "si" ? true : false; 
    }

    public function getEdad(){
        return $this->edad;
    }
    public function getEsEstudiante(){
        return $this->esEstudiante;
    }

    public function calcularEntrada(){
        $estudiante = $this->getEsEstudiante();
        $edad = $this->getEdad();
        if ($estudiante && $edad<12){
            $precio = 160; 
        } elseif ($estudiante && $edad>=12){
            $precio = 180;
        } else {
            $precio = 300;
        }
        return $precio; 
    }
}