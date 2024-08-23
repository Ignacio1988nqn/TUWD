$(document).ready(function(){
    $("#form").validate({
        rules: {
            lunes: {
                required: true
            },
            martes: {
                required: true
            },
            miercoles: {
                required: true
            },
            jueves: {
                required: true
            },
            viernes: {
                required: true
            }
        }
    });
});