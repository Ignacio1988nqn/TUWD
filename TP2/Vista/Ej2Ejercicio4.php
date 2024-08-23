<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 3</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion4_jquery.js"> </script>
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 4</h1>
        <h2>Consignas</h2>
        <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
            esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
            persona es mayor de edad o no; (si la edad es mayor o igual a 18).
            Enviar los datos usando el método GET y luego probar de modificar los datos
            directamente en la url para ver los dos posibles mensajes.</p>
        <h2>Solucion</h2>
        <h2>Ingresar Los Datos Para generear un saludo:</h2>

        <form id="form" action="./action/verdatos4.php" method="get">
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre" ></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido" ></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="text" name="edad" id="edad" ></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" id="direccion" ></td>
                </tr>
            </table>
            <br>

            <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
        </form>
    </div>
</body>

</html>