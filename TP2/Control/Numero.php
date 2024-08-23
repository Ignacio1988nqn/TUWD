<?php 

class Numero {

    private $numero ; 

    public function __construct($info)
    {
        $this->numero = $info['numero'];
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function devolverSigno($numero){
        if($numero > 0 ){
            $retorna = "positivo";
        } elseif($numero <0){
            $retorna = "negativo";
        } else {
            $retorna ="cero";
        }
        return $retorna;
    }

}