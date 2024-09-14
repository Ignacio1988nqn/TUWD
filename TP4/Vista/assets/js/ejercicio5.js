$(document).ready(function(){
    $("#form").validate({
        rules: {
            DniDuenio: {
                required: true,
                number: true, 
                minlength: 7, 
                maxlength: 8,
            }
        },
        messages: {
            DniDuenio: {
                required: "Por favor, ingrese su DNI.", 
                number: "El DNI solo debe contener numeros.",
                minlength: "Ingrese minimo 7 caracteres",
                maxlength: "Ingrese maximo 8 digitos"
            },
        },

    });
});
