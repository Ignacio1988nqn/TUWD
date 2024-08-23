<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 3</title>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
   <script src="/TUWD/TP2/Ejercicio2/Vista/assets/verificacion5_jquery.js"> </script>
 
</head>
<body>
    <form action="verdatos5.php" method="GET" id="form">  <!-- action: a donde se enviara el formulario (pag php)--> 
        
        <br> 
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" id="form">
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
        <label for="genero">Genero: </label> 
        <input type="text" id="genero" name="genero"> 
        <br>
        <br> 
        <h2> Seleccione su nivel de estudio: </h2>
        <input type="radio" id="1" name="nivel" value="1">
        <label for="1">Ninguno </label>
        
        <input type="radio" id="2" name="nivel" value="2" >
        <label for="2">Primario </label>
        
        <input type="radio" id="3" name="nivel" value="3" >

        <label for="3">Secundario </label>
        <br> 
        <br> 

        <button type="submit">Enviar</button>
    </form>
</body>
</html>