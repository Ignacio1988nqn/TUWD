<?php 

class Calculadora {

    private $n1; 
    private $n2 ;
    private $op ; 

    public function __construct($datos)
    {
        $this->n1 = $datos['n1'];
        $this->n2 = $datos['n2'];
        $this->op = $datos['op']; 
    }

    public function getN1(){
        return $this->n1; 
    }
    public function getN2(){
        return $this->n2; 
    }
    public function getOp(){
        return $this->op; 
    }

    public function calcularOperacion(){
        $op = $this->getOp(); 
        $n1 = $this->getN1(); 
        $n2 = $this->getN2(); 

        switch($op){
            case 'suma':
                $res = $n1+$n2;
                break;
            case 'resta':
                $res = $n1-$n2;
                break; 
            case 'multiplicacion':
                $res = $n1 * $n2 ; 
                break;
            case 'dividir': 
                if ($n2!=0){
                $res = $n1 / $n2;
                }
                break;
        }
        return $res; 
    }

}