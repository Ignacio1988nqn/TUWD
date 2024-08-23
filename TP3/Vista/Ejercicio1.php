<!DOCTYPE html >
 <html>
 <head><title>Ejemplo del uso de formularios</title>
    <script src="../../../JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../../../JsJQuery/jquery.validate.min.js"></script>
    <script src="validarArchivo.js"> </script>
</head>
   <body>
      <form id="form" method="POST" action="verArchivo.php" enctype="multipart/form-data" onsubmit="return validar()">
         Ingresa el archivo: <input name="miArchivo" id="miArchivo" type="file" />
         <br>
         <br>
         <input type="submit" value="Enviar" id="enviar" name="enviar"/>
      </form>
   </body>
 </html>