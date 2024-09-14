$(document).ready(function(){
    $("#form").validate({
        rules: {
            patente: {
                required: true,
                pattern: /^[A-Za-z]{3}\s?\d{3}$/
            },
        },
        messages: {
            patente: {
                required: "Por favor, ingrese la patente.", 
                pattern: "La patente debe tener el formato AAA111, AAA 111, aaa111, o aaa 111"  
            },
        },

    });
});
