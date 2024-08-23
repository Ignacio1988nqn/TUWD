<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>

</head>

<body>
    <div id="container" style="margin:50px 400px">
        <form id="form" class="row g-3 form-style" action="./action/ej1.php" enctype="multipart/form-data" method="post">
            <div class="col-8">
                <label for="formFile" class="form-label">Subir Archivo al Servidor</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
            </div>
            <div class="col-12" style="padding-top: 25px;">
                <input type="submit" class="btn btn-info" style="border-color: lightgray;color:white;" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>