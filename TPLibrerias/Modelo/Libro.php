<?php 
class Libro {
    private $idLibro;
    private $titulo;
    private $autor; // obj autor 
    private $anio;
    private $editorial;
    private $cantPag;
    private $mensajeOperacion;

    public function __construct() {
        $this->idLibro = "";
        $this->titulo = "";
        $this->autor = new Autor(); //obj autor
        $this->anio = "";
        $this->editorial = "";
        $this->cantPag = "";
    }

    public function setear($idLibro, $titulo, $autor, $anio, $editorial, $cantPag) {
        $this->setIdLibro($idLibro);
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setAnio($anio);
        $this->setEditorial($editorial);
        $this->setCantPag($cantPag);
    }

    public function cargar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM libro WHERE idLibro = " . $this->getIdLibro();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $objAutor = new Autor();
                    if ($objAutor->buscar($row['idAutor'])){  
                        $objAutor->setidAutor($row['idAutor']);
                        $objAutor->cargar();
                    } else {
                        $objAutor = null;
                    }

                    $this->setear($row['idLibro'], $row['Titulo'], $objAutor, $row['Anio'], $row['Editorial'], $row['CantPag']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("libro->cargar: " . $base->getError());
        }
        return $resp;
    }

    // Set
    public function setIdLibro($idLibro){
        $this->idLibro = $idLibro;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setAnio($anio) {
        $this->anio = $anio;
    }
    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }
    public function setCantPag($cantPag) { 
        $this->cantPag = $cantPag; 
    }
    public function setMensajeOperacion($mensajeOperacion) { 
        $this->mensajeOperacion = $mensajeOperacion; 
    }

    // Get
    public function getIdLibro() { 
        return $this->idLibro; 
    }
    public function getTitulo() { 
        return $this->titulo; 
    }
    public function getAutor() { 
        return $this->autor; 
    }
    public function getAnio() { 
        return $this->anio; 
    }
    public function getEditorial() { 
        return $this->editorial; 
    }
    public function getCantPag() { 
        return $this->cantPag; 
    }
    public function getMensajeOperacion() { 
        return $this->mensajeOperacion; 
    }

    public function buscar($idLibro) {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM libro WHERE idLibro = " . $idLibro;
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $objAutor = new Autor();
                    $objAutor->setidAutor($row['idAutor']);
                    $objAutor->cargar();
                    $this->setear($row['idLibro'], $row['Titulo'], $objAutor, $row['Anio'], $row['Editorial'], $row['CantPag']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("libro->buscar: " . $base->getError());
        }
        return $resp;
    }


    public function insertar() {
        $respuesta = false;
        $base = new BaseDatos();
        $objAutor = new Autor();
        if ($objAutor!=null){
            $idAutor = $objAutor->getidAutor(); 
        } else {
            $idAutor = null;
        }
        if ($this->getAutor() !=null){
            $sql = "INSERT INTO libro (Titulo, idAutor, Anio, Editorial, CantPag)
                VALUES ('"
                . $this->getTitulo() . "', '". $idAutor . "', '"
                . $this->getAnio() . "', '". $this->getEditorial() . "', '". $this->getCantPag() . "');";

            if ($base->Iniciar()) {
                if ($elid = $base->Ejecutar($sql)) {
                    $this->setIdLibro($elid);
                    $respuesta = true;
                } else {
                    $this->setMensajeOperacion("libro->insertar: " . $base->getError());
                }
            } else {
                $this->setMensajeOperacion("libro->insertar: " . $base->getError());
            }
        }
        
        return $respuesta;
    }



    public function modificar() {
        $resp = false;
        $base = new BaseDatos();
        $objAutor = $this->getAutor(); 
        if ($objAutor instanceof Autor){
            $idAutor = $objAutor->getidAutor(); 
        } else {
            $idAutor = null;
        }
        $sql = "UPDATE libro SET Titulo = '" . $this->getTitulo() . "', idAutor = '" . $idAutor . "', 
                Anio = '" . $this->getAnio() . "', Editorial = '" . $this->getEditorial() . "', 
                CantPag = '" . $this->getCantPag() . "' WHERE idLibro = " . $this->getIdLibro();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("libro->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("libro->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM libro WHERE idLibro = " . $this->getIdLibro();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("libro->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("libro->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "") {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM libro ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $objLibro = new Libro();
                    $objAutor = new Autor();
                    if ($row['idAutor'] !==null){
                        $objAutor->setidAutor($row['idAutor']);
                        $objAutor->cargar();
                    } else {
                        $objAutor = null;
                    }
                    $objLibro->setear($row['idLibro'], $row['Titulo'], $objAutor, $row['Anio'], $row['Editorial'], $row['CantPag']);
                    array_push($arreglo, $objLibro);
                }
            }
        } else {
            $this->setMensajeOperacion("libro->listar: " . $base->getError());
        }

        return $arreglo;
    }

   
}

?>