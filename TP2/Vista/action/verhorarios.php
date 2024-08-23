<!DOCTYPE html>
<html lang="es">

<head>
    <title>Resultado - Ejercicio 2</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php
        include_once '../../Utils/datosSubmitted.php';
        include_once '../../Control/Horas.php';
        $datos = darDatosSubmitted();

        if ($datos != null) {
            $arDias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
            $objHoras = new Horas($arDias, $datos);
            $cantHoras = $objHoras->contarHoras();

            echo "Total de horas cursadas en la semana: " . $cantHoras . "<br>";
        } else {
            echo "<h2>No se registraron datos</h2>";
        }
        ?>
        <br>
        <a href="../Ej2Ejercicio2.php" class="btn btn-primary">Volver al formulario</a>
        <br>
        <br>
        <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>

</html>