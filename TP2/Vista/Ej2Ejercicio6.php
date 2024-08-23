<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario - Ejercicio 3</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion6_jquery.js"> </script>

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>TP 1 - Ejercicio 6</h1>
        <h2>Consignas</h2>
        <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
            deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
            que procesa el formulario la cantidad de deportes que practica.
        </p>
        <h2>Solucion</h2>
        <h2>Ingresar Los datos para generear un saludo:</h2>

        <form id="form" action="./action/verdatos6.php" method="get">
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

            <p>Seleccione los deportes que practica:</p>
            <input type="checkbox" id="futbol" name="deportes[]" value="futbol">
            <label for="futbol"> Futbol </label> <br>
            <input type="checkbox" id="basquet" name="deportes[]" value="basquet">
            <label for="basquet"> Basquet </label> <br>
            <input type="checkbox" id="tennis" name="deportes[]" value="tennis">
            <label for="tennis"> Tenis </label> <br>
            <input type="checkbox" id="voley" name="deportes[]" value="voley">
            <label for="voley"> Voley </label> <br>
            <br>
            <br>
            <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
        </form>
    </div>
</body>

</html>