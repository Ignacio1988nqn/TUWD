<?php 

class Mensaje {

    private $nombre; 
    private $apellido; 
    private $edad ; 
    private $dir ; 
    private $genero ; 
    private $nivel ; 
    private $deporte ; 

    public function __construct($datos)
    {
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->edad = $datos['edad'];
        $this->dir = $datos['direccion'];
        $this->genero = $datos['sexo'] ?? null ;        //null debido a que no todos mis mensajes usan estos atributos
        $this->nivel = $datos['nivel'] ?? null;
        $this->deporte = $datos['deportes'] ?? []; 
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getDir(){
        return $this->dir;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getNivel(){
        return $this->nivel;
    }
    public function getDeporte(){
        return $this->deporte;
    }

    public function devolverNivel(){
        $nivel = $this->getNivel();
        switch($nivel){
            case '1':
                $estudios = "No tengo estudios";
                break;
            case '2':
                $estudios = "Primarios"; 
                break;
            case '3':
                $estudios = "Secundarios";
                break;
        }
        return $estudios; 
    }

    public function mayorEdad(){
        if ($this->getEdad()>18){
            $mayor = "mayor"; 
        } else {
            $mayor = "menor";
        }
        return $mayor; 
    }

    public function calcularDeportes(){
        $contador = count($this->getDeporte());
        return $contador;
    }
}