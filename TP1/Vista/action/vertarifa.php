<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Ejercicio 8</title>
    <link rel="stylesheet" href="/TUWD/TP1/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once 'C:\XAMPP\htdocs\Practica\TP1\Control\Tarifa.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Utils/datosSubmitted.php';

    $datos = darDatosSubmitted(); 
        if ($datos){
            
            $objTarifa = new Tarifa($datos);
            $precio = $objTarifa->calcularEntrada();

            echo "El precio de su entrada es de: $". $precio . "<br>";
        } else {
            echo "<h2>No se recibieron los datos solicitados.</h2>";
        }
    ?>
    <br>
    <a href="/TUWD/TP1/Vista/Ejercicio8.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>