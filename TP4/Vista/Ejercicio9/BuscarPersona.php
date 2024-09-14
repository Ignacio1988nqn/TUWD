
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - Ejercicio 9 </title>
    <script src="../assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="../assets/js/ejercicio9.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese un Dni </h2>
                <form id="form" action="./action/accionBuscarPersona.php" method="post">
                    <div class="form-group">
                        <label for="NroDni">Dni:</label>
                        <input type="text" name="NroDni" id="NroDni" class="form-control" required>
                        <div class="invalid-feedback">El Dni es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Buscar Dni</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>