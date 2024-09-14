$(document).ready(function(){
    $("#form-E7").validate({
        rules: {
            Patente: {
                required: true,
            },
            Marca: {
                required: true,
                minlength: 3,
            },
            Modelo: {
                required: true,
            },
            DniDuenio: {
                required: true,
                number: true,
            },
        },
        messages: {
            Patente: {
                required: "Por favor, ingrese la patente.", 
            },
            Marca: {
                required: "Por favor, ingrese la marca.",
                minlength: "Ingrese minimo 3 caracteres",
            },
            Modelo: {
                required: "Por favor, ingrese el modelo.",
            },
            DniDuenio: {
                required: "Por favor, ingrese el DNI del dueño",
                number: "Por favor, ingrese un dni valido.",
            },
        },

    });
});
