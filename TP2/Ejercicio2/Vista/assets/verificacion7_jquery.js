$(document).ready(function(){
    $("#form").validate({
        rules: {
            n1: {
                required: true,
                number: true, 
            },
            n2: {
                required: true,
                number: true, 
            },
            op: {
                required: true
            }
        },
        messages: {
            n1: {
                required: "Se requiere de un numero",
            },
            n2: {
                required: "Se requiere de un numero",
            },
            op: {
                required: "Se requiere de una operacion",
            }
        }
    });
    
});