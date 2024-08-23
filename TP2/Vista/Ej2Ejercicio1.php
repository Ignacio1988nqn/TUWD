<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 1</title>
    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion1_jquery.js"> </script>

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <h1>Ejercicio 1</h1>
        <h2>Consignas</h2>
        <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
            llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
            enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
            respuesta, que permita volver a la página anterior</p>
        <h2>Solución:</h2>
        <form id="form" action="./action/vernumero.php" method="get">
            <div>
                <label for="number">Ingrese un numero</label>
                <input type="text" name="numero" id="numero">
            </div>
            <div style="margin-top: 40px;">
                <button type="submit" style="padding: 20px 40px;background-color: limegreen;margin-left: 130px;border-color: limegreen;color: white;border-radius: 5px;">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>