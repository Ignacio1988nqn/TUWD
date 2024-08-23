<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado - Ejercicio 8</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php
        include_once '../../Utils/datosSubmitted.php';
        include_once '../../Control/Tarifa.php';
        $datos = darDatosSubmitted();
        if ($datos) {

            $objTarifa = new Tarifa($datos);
            $precio = $objTarifa->calcularEntrada();

            echo "El precio de su entrada es de: $" . $precio . "<br>";
        } else {
            echo "<h2>No se recibieron los datos solicitados.</h2>";
        }
        ?>
        <br>
        <a href="../Ej2Ejercicio8.php" class="btn btn-primary">Volver al formulario</a>
        <br>
        <br>
        <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>

</html>