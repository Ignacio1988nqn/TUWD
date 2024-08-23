<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 3</title>
  
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
   <script src="/TUWD/TP2/Ejercicio2/Vista/assets/verificacion3_jquery.js"> </script>
</head>
<body>
    <form id="form" name="form" action="action/verdatos.php" method="post" >  <!-- action: a donde se enviara el formulario (pag php)--> 
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <br>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad">
        <br>
        <br>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion">
        <br>
        <br>
        <button type="submit" id="boton-enviar">Enviar</button>
    </form>

</body>
</html>