<?php 
//require_once 'C:/XAMPP/htdocs/TUWD-main/Utils/Librerias/krumo-master/class.krumo.php';
class AbmAutor {

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('idAutor',$param) and array_key_exists('Apellido',$param) and
            array_key_exists('Nombre',$param) 
        ){
            $obj = new Autor();
            $obj->setear($param['idAutor'], $param['Apellido'], $param['Nombre']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Autor
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['idAutor']) ){
            $obj = new Autor();
            $obj->setear($param['idAutor'], null,null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idAutor']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['idAutor'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idAutor']))
                $where.=" and idAutor ='".$param['idAutor']."'";
            if  (isset($param['Apellido']))
                 $where.=" and Apellido ='".$param['Apellido']."'";
            if  (isset($param['Nombre']))
                $where.=" and Nombre ='".$param['Nombre']."'";
           
        }
        $arreglo = Autor::listar($where);  
        //krumo($arreglo); 
        return $arreglo;
    }

    /**devuelve una lista con los libros escritos por cada autor  */
    public function listaAutoresLibros(){
        $abmLibro = new AbmLibro(); 
        $arrAutores = $this->buscar("");
        $arrLyA = []; 
        if ($arrAutores !=null){
            foreach($arrAutores as $unAutor){
                $librosXAutor = $abmLibro->buscar(['idAutor'=>$unAutor->getidAutor()]);
                $libros = [];
                if ($librosXAutor!=null){
                    foreach ($librosXAutor as $unLibro){
                        $libros[] = ['titulo'=>$unLibro->getTitulo(), 'anio'=>$unLibro->getAnio()];
                    }
                }
                $arrLyA[] = ['nombre'=>$unAutor->getNombre(), 'apellido'=>$unAutor->getApellido(), 'libros'=>$libros];
            }
        }
        return $arrLyA;
    }
    
}