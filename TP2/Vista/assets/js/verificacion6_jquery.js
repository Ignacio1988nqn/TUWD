$(document).ready(function(){
    $("#form").validate({
        rules: {
            nombre: {
                required: true,
            },
            apellido: {
                required: true,
            },
            edad: {
                required: true,
                number: true,
            },
            direccion: {
                required: true,
                minlength: 3
            },
            sexo: {
                required: true
            },
            nivel: {
                required: true,
            },
            deportes: {
                required: false,
            }
        },
        messages: {
            nombre: {
                required: "Por favor, ingrese su nombre.",
              
            },
            apellido: {
                required: "Por favor, ingrese su apellido.",
            },
            edad: {
                required: "Por favor, ingrese su edad.",
                number: "Por favor, ingrese un número válido.",
            },
            direccion: {
                required: "Por favor, ingrese su dirección.",
                minlength: "La dirección debe tener al menos 3 caracteres."
            },
            sexo: {
                required: "Por favor, ingrese su genero",
            },
            nivel: {
                required: "Por favor, ingrese sunivel de estudio",
            },
        },
    })
})