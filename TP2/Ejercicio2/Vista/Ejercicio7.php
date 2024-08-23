<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 7</title>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio2/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
   <script src="/TUWD/TP2/Ejercicio2/Vista/assets/verificacion7_jquery.js"> </script>
</head>
<body>
    <form action="action/versuma.php" method="GET" id="form">  <!-- action: a donde se enviara el formulario (pag php)--> 
        <h2> Ingrese dos numeros y una operacion a realizar</h2>
        <label for="n1">Numero 1:</label>
        <input type="text" id="n1" name="n1">
        <br>
        <br>
        <label for="n2">Numero 2: </label>
        <input type="text" id="n2" name="n2">
        <br>
        <br>
        <label for="op">Operacion</label>
        <select id="op" name ="op" required>
            <option value="suma"> Suma </option>
            <option value="resta"> Resta </option>
            <option value="multiplicacion"> Multiplicacion </option>
            <option value="dividir">Division</option>
        </select>
        
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>