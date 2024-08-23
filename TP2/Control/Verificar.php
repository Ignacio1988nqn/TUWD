<?php

class Verificar
{

    private $arrayusers;
    private $user;
    private $pass;
    private $isValid;

    public function __construct($us, $pa)
    {
        $this->arrayusers = [
            [
                "usuario" => "fai836",
                "password" => "ignacio22"
            ],
            [
                "usuario" => "admin",
                "password" => "qwerty123"
            ]
        ];;
        $this->user = $us;
        $this->pass = $pa;
    }

    public function verificar()
    {
        $this->isValid = false;
        foreach ($this->arrayusers as $itemuser) {

            if ($itemuser['usuario'] == $this->user && $itemuser['password'] == $this->pass) {
                $this->isValid = true;
            }
        }
        return $this->isValid;
    }

    public function getarrayusers(){
        return $this->arrayusers;        
    }

    public function setarrayusers($val){
        $this->arrayusers=$val;

    }
    public function getuser(){
        return $this->user;        
    }

    public function setuser($val){
        $this->user=$val;

    }
    public function getpass(){
        return $this->pass;        
    }

    public function setpass($val){
        $this->pass=$val;

    }
    public function getisValid(){
        return $this->isValid;        
    }

    public function setisValid($val){
        $this->isValid=$val;

    }



}
