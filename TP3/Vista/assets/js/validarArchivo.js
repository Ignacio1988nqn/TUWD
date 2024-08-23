$(function validar(){
    $("#form").validate({
        rules: {
          miArchivo: {
            required: true,
            extension: "pdf|doc",
            filesize: 2 * 1024 * 1024,
          },
        },
        messages: {
          miArchivo: {
            required: "<br>Adjunta un archivo.<br>",
            extension: "<br>Adjunta un archivo válido en formato PDF o DOC.<br>",
            filesize: "<br>El archivo debe ser menor o igual a 2MB.<br>"
          }
        },
      });

      //formato del archivo 
      $.validator.addMethod(
        "extension",
        function (value, element, param) {
          // Obtengo la extensión del archivo subido.
          var extension = value.split(".").pop().toLowerCase();
      
          // Verifico si la extensión está en la lista de extensiones permitidas (param).
          return param.split("|").indexOf(extension) !== -1;
        },
      );
      //tamaño del archivo 
      $.validator.addMethod(
        "filesize",
        function (value, element, param) {
            return this.optional(element) || (element.files[0].size <= param);
        },
        "El archivo debe ser menor o igual a 2MB."
    );
});
