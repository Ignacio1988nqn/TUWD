$(document).ready(function(){
    $("#form").validate({
        rules: {
            nombre: {
                required: true,
                maxlength: 20,
                minlength: 3
            },
            apellido: {
                required: true,
                maxlength: 20,
                minlength: 3
            },
            edad: {
                required: true,
                maxlength: 3,
                range: [1, 100]
            },
            direccion: {
                required: true,
                maxlength: 30,
                minlength: 3
            },
            genero: {
                required: true
            },
            nivel: {
                required: true,
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
            genero: {
                required: "Por favor, ingrese su genero",
            },
            nivel: {
                required: "Por favor, ingrese sunivel de estudio",
            },
        },
    })
})