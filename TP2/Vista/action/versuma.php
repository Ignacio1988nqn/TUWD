<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado - Ejercicio 7</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php
        include_once '../../Utils/datosSubmitted.php';
        include_once '../../Control/Operacion.php';

        $datos = darDatosSubmitted();

        if ($datos) {

            $objCal = new Operacion($datos);
            $op = $objCal->getOp();
            $n2 = $objCal->getN2();
            $n1 = $objCal->getN1();
            $res = $objCal->calcularOperacion();

            if ($op != 'dividir' || $n2 != 0) {
                echo "Operación seleccionada: " . $op . "<br>";
                echo "Operando 1: " . $n1 . "<br>";
                echo "Operando 2: " . $n2 . "<br>";
                echo "Resultado: " . $res . "<br>";
            }
        } else {
            echo "<h2> No se recibieron datos. </h2>";
        }
        ?>
        <br>
        <a href="../Ej2Ejercicio7.php" class="btn btn-primary">Volver al formulario</a>
        <br>
        <br>
        <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>

</html>