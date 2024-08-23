<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta title="TP 1 - Ejercicio 3">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 3</h1>
        <h2>Consignas</h2>
        <p>Crear una página php que contenga un formulario HTML como el que se indica en la
            imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
            que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
            nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
            Cambiar el método Post por Get y analizar las diferencias.</p>
        <h2>Solucion</h2>
        <h2>Ingresar Los Datos Para generar un saludo:</h2>

        <form id="form" action="./action/verdatos.php" method="post">
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre" required></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido" required></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="number" name="edad" id="edad" required></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" id="direccion" required></td>
                </tr>
            </table>
            <br>

            <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
        </form>
    </div>
</body>

</html>