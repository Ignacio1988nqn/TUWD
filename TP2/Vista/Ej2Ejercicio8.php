<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 8</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion8_jquery.js"> </script>
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 8</h1>
        <h2>Consignas</h2>
        <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
            función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
            clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
            es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
            de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
            formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
            un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
            Agregar un botón para limpiar el formulario y volver a consultar.</p>
        <h2>Solución:</h2>
        <h2>Cine Cinem@s:</h2>

        <form id="form" action="./action/vertarifa.php" method="get">

            <label for="edad">Edad: </label>
            <input type="text" name="edad" id="edad">

            <p>Estudiante:</p>
            <input type="radio" id="si" name="estudiante" value="si" checked="checked">
            <label for="1">Si.</label><br>
            <input type="radio" id="no" name="estudiante" value="no">
            <label for="2">No.</label><br>

            <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
        </form>
    </div>
</body>

</html>