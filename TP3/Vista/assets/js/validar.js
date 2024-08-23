
$(function validar(){
    $("#form").validate({
        rules: {
          archivo: {
            required: true,
            extension: "txt",
          },
        },
        messages: {
            archivo: {
                required: "<br> Adjunta un Archivo. <br>", 
                extension: "<br>Debes adjuntar un archivo de texto (.txt).<br>",
            } 
        },
        
      });
      
      $("#enviar").click(function () {
        if ($("#form").valid() == false) {
          return;
        }
      
        $("#form").trigger("submit");
      });
      
      $.validator.addMethod(
        "extension",
        function (value, element, param) {
          // Obtengo la extensión del archivo subido.
          var extension = value.split(".").pop().toLowerCase();
      
          // Verifico si la extensión es igual a la extensión permitida (param).
          return extension === param;
        },
        "Por favor, seleccione un archivo de texto válido (.txt)."
      );    
})
