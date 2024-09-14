<?php 

include_once 'C:/XAMPP/htdocs/TUWD/TP4/Modelo/Conector/BaseDatos.php';
include_once 'C:/XAMPP/htdocs/TUWD/TP4/Control/AbmAuto.php';
include_once 'C:/XAMPP/htdocs/TUWD/TP4/Control/AbmPersona.php';
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $duenio;
    private $mensajeOperacion;

    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->duenio=null;
        $this->mensajeOperacion ="";
    }

    public function setear($patente,$marca,$modelo,$duenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDuenio($duenio);
    }

    public function cargar(){
        $resp = false; 
        $base= new BaseDatos; 
        $sql = "SELECT * FROM auto WHERE patente = " . $this->getPatente(); 
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $objPersona = new Persona(); 
                    if ($objPersona->buscar($row['DniDuenio'])){
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar();
                    } else {
                        $objPersona = null;
                    }
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objPersona);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;
    
    }

    public function getPatente(){
        return $this->patente;
    }

    public function setPatente($patente){
        $this->patente = $patente;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getDuenio(){
        return $this->duenio;
    }

    public function setDuenio($duenio){
        $this->duenio = $duenio;
    }

    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }

    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function buscar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE patente = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['dniDuenio']);
                    $duenio->buscar();
                    $this->cargar($row['patente'], $row['marca'], $row['modelo'], $duenio);
                    $resp = true;              
                }
            }
        } else {
            $this->setMensajeOperacion("auto->listar: ".$base->getError());
        }
        return $resp;
    
        
    }

    public function insertar(){
        $resp = false;
        $base = new BaseDatos();$objDuenio = $this->getDuenio();
        $objDuenio = $this->getDuenio(); 
        //var_dump($objDuenio); //prueba para ver que esta devolviendo 
        
        
        if ($objDuenio !=null) {
            $dniDuenio = $objDuenio->getNroDni();
        } else {
            $dniDuenio = null;
        }
        
       //var_dump($dniDuenio);                 // prueba para ver que devuelve 
        if($this->getDuenio() != null){
            $sql="INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES ('".$this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."','".$dniDuenio."')";
            if ($base->Iniciar()) {
                if ($patente = $base->Ejecutar($sql)) {
                    $this->setPatente($patente);
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("auto->insertar: ".$base->getError());
                }
            } else {
                $this->setMensajeoperacion("auto->insertar: ".$base->getError());
            }
        }
        
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();

        $objPersona = $this->getDuenio();
        //var_dump($objPersona); //prueba
        if ($objPersona instanceof Persona){
            $dniDuenio = $objPersona->getNroDni();
        } else {
            $dniDuenio = null;
        }

        $sql = "UPDATE auto SET marca = '".$this->getMarca()."',modelo='".$this->getModelo()."',
        dniDuenio='".$dniDuenio."' WHERE patente='". $this->getPatente()."'";
        //echo "<pre>Consulta SQL: $sql</pre>";                 //prueba para ver la consulta
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.=' WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res> -1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $duenio = new Persona();
                    if ($row['DniDuenio'] !== null){
                        $duenio->setNroDni($row['DniDuenio']);
                        $duenio->cargar();
                    } else {
                        $duenio = null;
                    }
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setMensajeOperacion("auto->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
}