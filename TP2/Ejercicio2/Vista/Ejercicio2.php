<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 2</title>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
   <script src="/TUWD/TP2/Ejercicio2/Vista/assets/verificacion2_jquery.js"> </script>
</head>
<body>
    <h2> Horas de cursada de Programacion Web Dinamica </h2>
    <form action="action/verhorarios.php" method="GET" id="form">  <!-- action: a donde se enviara el formulario (pag php)--> 
        <label for="lunes">Lunes:</label>
        <input type="number" id="lunes" name="lunes">
        <br>
        <br>
        <label for="martes">Martes:</label>
        <input type="number" id="martes" name="martes">
        <br>
        <br>
        <label for="miercoles">Miercoles:</label>
        <input type="number" id="miercoles" name="miercoles">
        <br>
        <br>
        <label for="jueves">Jueves:</label>
        <input type="number" id="jueves" name="jueves">
        <br>
        <br>
        <label for="viernes">Viernes:</label>
        <input type="number" id="viernes" name="viernes">
        <br>
        <br>
        <button type="submit" id="boton-enviar">Enviar</button>
    </form>
</body>
</html>