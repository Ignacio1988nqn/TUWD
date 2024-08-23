<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 1</title>
    <link rel="stylesheet" href="/TUWD/TP2/Ejercicio2/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio2/Utils/datosSubmitted.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio2/Control/Numero.php';

    $datos = darDatosSubmitted();

    if ($datos !=null) {
        $nro = new Numero($datos);
        
        $numero = $nro->getNumero();
        $signo = $nro->devolverSigno($numero);
        echo "<h2> El numero " . $numero ." es " . $signo . " <h2>";  
    } else {
        echo "<h2>No se recibió ningún número.</h2>";
    }
    ?>

    <br>
    <a href="/TUWD/TP2/Ejercicio2/Vista/Ejercicio1.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>