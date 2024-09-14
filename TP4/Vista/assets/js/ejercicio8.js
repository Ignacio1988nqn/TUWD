$(document).ready(function(){
    $("#form-E8").validate({
        rules: {
            Patente: {
                required: true,
                pattern: /^[A-Za-z]{3}\s?\d{3}$/
            },
            DniDuenio: {
                required: true,
                number: true,
            },
        },
        messages: {
            Patente: {
                required: "Por favor, ingrese la patente.", 
                pattern: "La patente debe tener el formato AAA111, AAA 111, aaa111, o aaa 111"  
            },
            DniDuenio: {
                required: "Por favor, ingrese el DNI del dueño",
                number: "Por favor, ingrese un dni valido.",
            },
        },

    });
});
