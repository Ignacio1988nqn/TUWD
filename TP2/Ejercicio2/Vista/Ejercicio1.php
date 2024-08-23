<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 1</title>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
   <script src="/TUWD/TP2/Ejercicio2/Vista/assets/verificacion1_jquery.js"> </script>

</head>
<body>
    
    <h2>Ingrese un número</h2>
    <form action="action/vernumero.php" method="GET" id="form" >
    
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <br><br>
        <button type="submit" id="boton">Enviar</button>
        
    </form>
</body>
</html>