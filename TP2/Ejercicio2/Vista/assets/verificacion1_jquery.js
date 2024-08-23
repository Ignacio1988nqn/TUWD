
$(function validar(){
  
    $("#form").validate({
        rules:{
            numero:{
                required: true,
                number: true, 
            },
        },
        messages:{
            numero:{
                required: "Por favor, ingrese un número.",
                number: "Por favor, ingrese un número válido."
            }
        }
    });

    $("#boton").click(function(){
        
        if(!$("#form").valid()){
            $("#numero").css("border-color","red")
        }
    })
});

