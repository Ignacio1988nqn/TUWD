$(document).ready(function(){
    $("#form").validate({
        rules:{
            titulo:{
                required: true,
            },
            actores:{
                required: true,
            }, 
            director:{
                required: true,
            },
            guion:{
                required: true,
            }, 
            produccion: {
                required: true,
            }, 
            anio: {
                required: true,
                maxlength: 4 , 
                number: true, 
            },
            nacionalidad: {
                required:true,
            }, 
            genero: {
                required: true,
            },
            duracion: {
                required: true,
                maxlength: 3,
                number: true,
            }, 
            restriccion: {
                required: true,
            },
            sipnosis: {
                required: true,
            },
        },
        messages:{
            titulo: "Ingrese el titulo de la pelicula",
            actores: "Ingrese el nombre de los actores",
            director: "Ingrese el nombre del director",
            guion: "Ingrese el guion" ,
            produccion: "Ingrese a la productora",
            anio: {
                required: "Ingrese el año de estreno",
                maxlength: "Ingrese un año valido",
                number: "Ingrese un numero valido",
            },
            nacionalidad: "Ingrese la nacionalidad",
            genero: "Ingrese el genero de la pelicula.",
            duracion:{ 
                required: "Ingrese la duracion (Maximo 3 digitos)",
                maxlength: "Ingrese hasta 3 digitos",
                number: "Ingrese un numero valido",
            },
            restriccion: "Ingrese la restriccion de edad",
            sipnosis: "Ingrese la sipnosis",
        },
    })
});