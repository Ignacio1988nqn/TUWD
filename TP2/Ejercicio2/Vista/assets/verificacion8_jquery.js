$(document).ready(function(){
    $("#form").validate({
        rules: {
            edad: {
                required: true,
                range: [1, 130]
            },
            estudiante: {
                required: true
            }
        }, 
        messages: {
            edad: {
                required: "Seleccione su edad",
                range: "Seleccione una edad valida",
            }, 
            estudiante: {
                required: "<br>Seleccione una opcion<br>" , 
            }
        }
    })
})