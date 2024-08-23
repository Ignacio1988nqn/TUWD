$(document).ready(function(){
    $("#form").validate({
        rules: {
            lunes: {
                required: true,
                number: true
            },
            martes: {
                required: true,
                number: true
            },
            miercoles: {
                required: true,
                number: true
            },
            jueves: {
                required: true,
                number: true
            },
            viernes: {
                required: true,
                number: true
            }
        },
        messages: {
            lunes: "El campo Lunes es obligatorio y debe ser numérico.",
            martes: "El campo Martes es obligatorio y debe ser numérico.",
            miercoles: "El campo Miercoles es obligatorio y debe ser numérico.",
            jueves: "El campo Jueves es obligatorio y debe ser numérico.",
            viernes: "El campo Viernes es obligatorio y debe ser numérico."
        }
        
    });
});