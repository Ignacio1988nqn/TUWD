
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - Ejercicio 5 </title>
    <script src="../assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="../assets/js/ejercicio5.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese un DNI para ver los autos asociados</h2>
                <form id="form" action="./action/actionAutosPersona.php" method="post">
                    <div class="form-group">
                        <label for="DniDuenio">DNI:</label>
                        <input type="text" name="DniDuenio" id="DniDuenio" class="form-control" required>
                        <div class="invalid-feedback">El DNI del dueño es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ver autos asociados</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>