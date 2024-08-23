<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 2</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion2_jquery.js"> </script>

</head>

<body>
    <div id="container" style="margin:50px 300px;">

        <h1>TP 1 - Ejercicio 2</h1>
        <h2>Consignas</h2>
        <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
            de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
            Enviar los datos del formulario por el método Get a otra página php que los reciba y
            complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
            se cursan por semana.</p>
        <h2>Solucion</h2>
        <h2>Ingresar Por Cada Día La Cantidad De Horas De Cursada:</h2>

        <form id="form" action="./action/verhorarios.php" method="get">
            <table>
                <tr>
                    <th>Dia</th>
                    <th>Carga Horaria</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td><input type="text" name="lunes" id="lunes"></td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td><input type="text" name="martes" id="martes"></td>
                </tr>
                <tr>
                    <td>Miercoles</td>
                    <td><input type="text" name="miercoles" id="miercoles"></td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td><input type="text" name="jueves" id="jueves"></td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td><input type="text" name="viernes" id="viernes"></td>
                </tr>
            </table>
            <br>
            <div style="margin-top: 40px;">
                <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
            </div>
        </form>
    </div>

</html>