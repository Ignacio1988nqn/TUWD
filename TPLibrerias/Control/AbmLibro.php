<?php 
include_once 'C:/XAMPP/htdocs/TUWD/TPLibrerias/Modelo/Libro.php';
include_once 'C:/XAMPP/htdocs/TUWD/TPLibrerias/Modelo/Autor.php';
include_once 'C:/XAMPP/htdocs/TUWD/TPLibrerias/Modelo/Conector/BaseDatos.php';

class AbmLibro {
    
     /**
     * Espera como parámetro un arreglo asociativo donde las claves coinciden con los nombres de las variables de instancia del objeto.
     * @param array $param
     * @return Libro
     */
    private function cargarObjeto($param){
        $obj = null;
        
        if( array_key_exists('idLibro', $param) and
            array_key_exists('Titulo', $param) and 
            array_key_exists('Anio', $param) and 
            array_key_exists('Editorial', $param) and 
            array_key_exists('CantPag', $param) and 
            array_key_exists('idAutor', $param)){

                $objAutor = new Autor();
                $objAutor->setidAutor($param['idAutor']);
                $objAutor->cargar();

                $obj = new Libro();
                $obj->setear($param['idLibro'], $param['Titulo'], $objAutor, $param['Anio'], $param['Editorial'], $param['CantPag']);
        }
        return $obj;
    }

    /**
     * Espera como parámetro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves.
     * @param array $param
     * @return Libro
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if (isset($param['idLibro'])) {
            $obj = new Libro();
            $obj->setear($param['idLibro'], null, null, null, null, null);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estén seteados los campos claves.
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idLibro'])) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * Permite dar de alta un libro.
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla != null && $elObjtTabla->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * Permite eliminar un libro.
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla != null && $elObjtTabla->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite modificar un libro.
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjeto($param);
            if ($elObjtTabla != null && $elObjtTabla->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite buscar un libro.
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param != null) {
            if (isset($param['idLibro']))
                $where .= " and idLibro ='" . $param['idLibro'] . "'";
            if (isset($param['Titulo']))
                $where .= " and Titulo ='" . $param['Titulo'] . "'";
            if (isset($param['Anio']))
                $where .= " and Anio ='" . $param['Anio'] . "'";
            if (isset($param['Editorial']))
                $where .= " and Editorial ='" . $param['Editorial'] . "'";
            if (isset($param['CantPag']))
                $where .= " and CantPag ='" . $param['CantPag'] . "'";
            if (isset($param['idAutor']))
                $where .= " and idAutor ='" . $param['idAutor'] . "'";
        }
        $arreglo = Libro::listar($where);

        return $arreglo;
    }
}
?>