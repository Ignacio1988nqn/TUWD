
<?php

class Usuario {
    private $usuario ; 
    private $clave; 

    public function __construct($info)
    {
        $this->usuario = $info['username']; 
        $this->clave = $info['password'];

    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function getClave(){
        return $this->clave;
    }

    // estatico para no crear la instancia 
    public static function validarUsuario($username, $password) {
        $usuarios = [
            ["usuario" => "usuario1", "clave" => "clave123"],
            ["usuario" => "usuario2", "clave" => "clave223"],
            ["usuario" => "usuario3", "clave" => "clave323"],
            ["usuario" => "usuario4", "clave" => "clave423"]
        ];

        foreach ($usuarios as $usuario) {
            if ($usuario['usuario'] === $username && $usuario['clave'] === $password) {
                return true;
            }
        }
        return false;
    }
}

?>