$(document).ready(function(){
    $("#form-E6").validate({
        rules: {
            dni: {
                required: true,
                number: true, 
                minlength: 7, 
                maxlength: 8,
            },
            apellido: {
                required: true,
                minlength: 3,
            },
            nombre: {
                required: true,
            },
            fecha: {
                required: true,
                date: true,
            },
            telefono: {
                required: true,
                number: true, 
                minlength: 10, 
                maxlength: 15,
            }, 
            domicilio: {
                required: true,
            }
        },
        messages: {
            dni: {
                required: "Por favor, ingrese su DNI.", 
                number: "El DNI solo debe contener numeros.",
                minlength: "Ingrese minimo 7 caracteres",
                maxlength: "Ingrese maximo 8 digitos"
            },
            apellido: {
                required: "Por favor, ingrese su nombre.",
                minlength: "Ingrese minimo 3 caracteres",
            },
            nombre: {
                required: "Por favor, ingrese su apellido.",
            },
            fecha: {
                required: "Por favor, ingrese su fecha de nacimiento.",
                date: "Por favor, ingrese una fecha válida.",
            },
            telefono: {
                required: "Por favor, ingrese su numero de telefono.",
                number: "Por vfavor, igrese numeros validos",
                minlength: "El telefono debe tener al menos 10 digitos.",
                maxlength: "El telefono debe tener maximo 15 digitos.",
            }, 
            domicilio: {
                required: "Por favor, ingrese su dirección.",
            }
        },

    });
});
