<!DOCTYPE html>
<html lang="es">
<head>
    <title>Resultado - Ejercicio 2</title>
    <link rel="stylesheet" href="/TUWD/TP1/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio2/Control/Horas.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio2/Utils/datosSubmitted.php';
    $datos = darDatosSubmitted();
    
    if($datos !=null){
        $arDias = ['lunes','martes','miercoles','jueves','viernes'];
        $objHoras = new Horas($arDias, $datos);
        $cantHoras = $objHoras->contarHoras();
       
        echo "Total de horas cursadas en la semana: " . $cantHoras ."<br>";
    } else {
        echo "<h2>No se registraron datos</h2>";
    }
    ?>
    <br>
    <a href="/TUWD/TP2/Ejercicio2/Vista/Ejercicio2.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>