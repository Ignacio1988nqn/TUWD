$(document).ready(function(){
    $("#form").validate({
        rules: {
            NroDni: {
                required: true,
                number: true, 
                minlength: 7, 
                maxlength: 8,
            }
        },
        messages: {
            NroDni: {
                required: "Por favor, ingrese su DNI.", 
                number: "El DNI solo debe contener numeros.",
                minlength: "Ingrese minimo 7 caracteres",
                maxlength: "Ingrese maximo 8 digitos"
            },
        },

    });
});