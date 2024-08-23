<?php 

function restriccionDeEdad($restriccion){
    $res = ""; 
    switch($restriccion){
        case 'todos': 
            $res= "A todo publico " ; 
            break; 
        case 'mayores7': 
            $res = "Mayores de 7 años";
            break;
        case 'mayores18': 
            $res = "Mayores de 18 años";
            break; 
    }
    return $res;
}