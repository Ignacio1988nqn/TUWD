<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 1</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php

        include_once '../../Utils/datosSubmitted.php';
        include_once '../../Control/Numero.php';

        $datos = darDatosSubmitted();

        if ($datos != null) {
            $nro = new Numero($datos);

            $numero = $nro->getNumero();
            $signo = $nro->devolverSigno($numero);
            echo "<h2> El numero " . $numero . " es " . $signo . " <h2>";
        } else {
            echo "<h2>No se recibió ningún número.</h2>";
        }
        ?>

        <br>
        <a href="../Ejercicio1.php" class="btn btn-primary">Volver al formulario</a>
        <br>
        <br>
        <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>

</html>