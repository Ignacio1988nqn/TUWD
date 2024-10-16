<?php 

class Autor {

    private $nombre; 
    private $apellido ; 
    private $idAutor; 
    private $mensajeOperacion ; 

    public function __construct(){
        $this->idAutor = "";
        $this->apellido = "";
        $this->nombre = "";
    }

    public function setear($idAutor, $apellido, $nombre){
        $this->setidAutor($idAutor);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
    }

    public function cargar(){
        $resp = false; 
        $base = new BaseDatos();
        $sql = "SELECT * FROM autor WHERE idAutor = " . $this->getidAutor();
        if ($base->Iniciar()){
            $res = $base->Ejecutar($sql); 
            if ($res>-1){
                if ($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idAutor'], $row['Apellido'], $row['Nombre']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("autor->listar: " .$base->getError());
        }
        return $resp;
    }

    //setters

    public function setidAutor($nroidAutor){
        $this->idAutor = $nroidAutor;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }  
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }

    //getters

    public function getidAutor(){
        return $this->idAutor;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }

    public function buscar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM autor WHERE idAutor = ".$this->getidAutor();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->cargar($row['idAutor'], $row['apellido'], $row['nombre']);
                    
                }
            }
        } else {
            $this->setMensajeOperacion("autor->listar: ".$base->getError());
        }
        return $resp;
    
        
    }

    public function insertar(){
        $respuesta = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO autor (idAutor, Apellido, Nombre)
        VALUES ('" 
        . $this->getidAutor() . "', '" 
        . $this->getApellido() . "', '" 
        . $this->getNombre() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setidAutor($elid);
                $respuesta = true;
            } else {
                $this->setMensajeOperacion("autor->insertar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("autor->insertar: ".$base->getError());
        }
        return $respuesta;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql="UPDATE autor SET Apellido='".$this->getApellido()."', Nombre='".$this->getNombre()."'  WHERE idAutor=".$this->getidAutor();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("autor->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("autor->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql="DELETE FROM autor WHERE idAutor=".$this->getidAutor();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("autor->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("autor->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM autor ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new autor();
                    $obj->setear($row['idAutor'], $row['Apellido'], $row['Nombre']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("autor->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    public function __toString() {
        return $this->getNombre() . ' ' . $this->getApellido(); 
    }
}
?>