
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - Ejercicio 8 </title>
    <script src="../assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="../assets/js/ejercicio8.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese los datos para cambiar al dueño de un auto </h2>
                <form id="form-E8" action="./action/accionCambioDuenio.php" method="post">
                    <div class="form-group">
                        <label for="Patente">Patente del auto: </label>
                        <input type="text" name="Patente" id="Patente" class="form-control" required pattern="[A-Za-z]{3}\s?[0-9]{3}">
                        <div class="invalid-feedback">La patente debe contener 3 letras y tres numeros</div>
                    </div>
                    <div class="form-group">
                        <label for="DniDuenio">DNI del nuevo dueño</label>
                        <input type="text" name="DniDuenio" id="DniDuenio" class="form-control" required>
                        <div class="invalid-feedback">El DNI del dueño es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Realizar cambio</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>