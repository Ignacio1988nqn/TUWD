<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 7</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion7_jquery.js"> </script>
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 7</h1>
        <h2>Consignas</h2>
        <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
            los inputs se ingresarán números y el select debe dar la opción de una operación
            matemática que podrá resolverse usando los números ingresados. En la página que
            procesa la información se debe mostrar por pantalla la operación seleccionada, cada
            uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
            formulario:
        </p>
        <h2>Solucion</h2>
        <h2>Operación Matemática:</h2>

        <form id="form" action="./action/versuma.php" method="get">
            <div>
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Número 1</td>
                        <td><input type="text" name="n1" id="n1"></td>
                    </tr>
                    <tr>
                        <td>Número 2</td>
                        <td><input type="text" name="n2" id="n2"></td>
                    </tr>
                </table>
                <br>
                <label for="operacion">Operación:</label>
                <select name="op" id="op">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicacion</option>
                </select>
            </div>

            <div style="margin-top: 40px;">
                <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>