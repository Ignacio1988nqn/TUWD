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

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

spl_autoload_register(function ($class_name){
    //echo "class ".$class_name ;
    $directorys = array(
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/Conector/',
        $_SESSION['ROOT'].'Control/',
      //  $GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
});

?>