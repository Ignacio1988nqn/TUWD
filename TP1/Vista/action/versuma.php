<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Ejercicio 7</title>
    <link rel="stylesheet" href="/TUWD/TP1/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Control/Calculadora.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Utils/datosSubmitted.php';

    $datos = darDatosSubmitted(); 

    if ($datos){

        $objCal = new Calculadora($datos);
        $op = $objCal->getOp();
        $n2 = $objCal->getN2() ; 
        $n1 = $objCal->getN1(); 
        $res = $objCal->calcularOperacion(); 
       
        if ($op!= 'dividir' || $n2 != 0) {
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
    <a href="/TUWD/TP1/Vista/Ejercicio7.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>