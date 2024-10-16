$(document).ready(function(){
    $("#form-E6").validate({
        rules: {
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
            Apellido: {
                required: "Por favor, ingrese su nombre.",
                minlength: "Ingrese minimo 3 caracteres",
            },
            Nombre: {
                required: "Por favor, ingrese su apellido.",
            },
            fechaNac: {
                required: "Por favor, ingrese su fecha de nacimiento.",
                date: "Por favor, ingrese una fecha válida.",
            },
            Telefono: {
                required: "Por favor, ingrese su numero de telefono.",
                number: "Por vfavor, igrese numeros validos",
                minlength: "El telefono debe tener al menos 10 digitos.",
                maxlength: "El telefono debe tener maximo 15 digitos.",
            }, 
            Domicilio: {
                required: "Por favor, ingrese su dirección.",
            }
        },

    });
});
