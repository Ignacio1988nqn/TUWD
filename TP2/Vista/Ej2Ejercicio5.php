<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 3</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion5_jquery.js"> </script>

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 5</h1>
        <h2>Consignas</h2>
        <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
            “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
            estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
            apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
            un mensaje que indique el tipo de estudios que posee y su sexo.</p>
        <h2>Solucion</h2>
        <h2>Ingresar Los Datos Para generear un saludo:</h2>

        <form id="form" action="./action/verdatos5.php" method="get">
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="text" name="edad" id="edad"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="direccion" id="direccion"></td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td><input type="text" name="sexo" id="sexo"></td>
                </tr>
            </table>
            <br>

            <p>Nivel de Estudios:</p>
            <input type="radio" id="1" name="nivel" value="1" checked="checked">
            <label for="1">No tiene estudios.</label><br>
            <input type="radio" id="2" name="nivel" value="2">
            <label for="2">Estudios Primarios.</label><br>
            <input type="radio" id="3" name="nivel" value="3">
            <label for="3">Estudios Secundarios.</label>
            <br>
            <br>
            <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
        </form>
    </div>
</body>

</html>