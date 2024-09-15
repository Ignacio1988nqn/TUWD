/**
 * Chequear no solo que se hayan cargado el usuario y la contraseña
 * antes de ser enviados al servidor sino que también debe realizar
 * un control de contraseña segura (La contraseña debe tener como
 * mínimo 8 caracteres, no puede ser igual que el nombre de usuario
 * ingresado y debe contener letras y números).
 */

$(function validar(){
    $("#form").validate({
        rules: {
            usuario: {
                required:true,
            }, 
            password: {
                required: true,
                minlength: 8, 
                letan: true,
                notEqual: "#usuario"
            },
        }, 
        messages: {
            usuario: {
                required: "Campo requerido",
            },
            password: {
                required: "Campo requerido", 
                minlength: "Minimo de 8 caracteres",
                letan: "Debe contener letras y numeros",
                notEqual: "Que no sea igual al nombre de usuario"
            },
        }
    })

    //numeros y letras 
    $.validator.addMethod("letan", function(value,element){
        return this.optional(element) ||  /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]+$/.test(value);
    }, "Debe contener letras y numeros");

    //usuario y contrase;a 
    $.validator.addMethod("notEqual",function(value,element,param){
        return value!== $(param).val();
    }, "Que no sea igual al usuario");
})

