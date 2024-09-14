<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - Ejercicio 4 </title>
    <script src="../assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="../assets/js/ejercicio4.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div id="container" style="margin:50px 30px;">
        <form id="form" action="./action/accionBuscarAuto.php" method="post">
            <div>
                <label for="patente"><h2>Ingrese un numero de patente:</h2> </label>
                <input type="text" name="patente" id="patente" required pattern="[A-Za-z]{3}\s?[0-9]{3}">
            </div>
            <div style="margin-top: 40px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>