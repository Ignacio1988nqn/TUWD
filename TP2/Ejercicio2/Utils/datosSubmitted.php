<?php

function darDatosSubmitted(){
    $datos = [];
   
    foreach($_GET as $key => $value){
        if($value != null){
            $datos[$key] = $value;
        }
    }
    foreach($_POST as $key => $value){
        if ($value !=null){
        $datos[$key] = $value;
        }
    }

    if ($datos != null){
        $datos = $datos; 
    } else {
        $datos = null; 
    }

    return $datos;
}
?>