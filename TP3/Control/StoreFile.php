<?php

class StoreFile {

    private $file;
    private $target_file;
    private $target_dir = '../../storage/';

    public function __construct($fileitem){        

        $this->file=$fileitem;
        $this->target_file=  $this->target_dir . basename($this->file["name"]);

    }

    public function store(){       
        
        if ($this->file["error"] <= 0) {
        
                if (!copy($this->file['tmp_name'], $this->target_dir . $this->file['name'])) {
                    return false;                   
                } else {
                    return true;                    
                }
            
        } else {
            echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
            return false;
        }

    }  

    public function gettarget_dir(){
        return $this->target_dir;        
    }

    public function settarget_dir($val){
        $this->target_dir=$val;

    }
    public function gettarget_file(){
        return $this->target_file;  
    }
    public function settarget_file($val){
        $this->target_file=$val;
    }
}

?>