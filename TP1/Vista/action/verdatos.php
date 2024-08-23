<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TUWD/TP1/Vista/assets/bootstrap-5.1.3-dist\css\bootstrap.min.css">

    <title>Resultado - Ejercicio 3</title>
</head>
<body>
    <?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Utils/datosSubmitted.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Control/Mensaje.php';

    $datos = darDatosSubmitted(); 

    if ($datos!=null){

        $objMensaje = new Mensaje($datos);

        echo "Hola, yo soy " . $objMensaje->getNombre() . " " . $objMensaje->getApellido() . " tengo "
        . $objMensaje->getEdad() . " años y vivo en " . $objMensaje->getDir() . ".<br>";
        
    } else {
        echo "No se recibieron datos";
    }
    ?>
    <br>
    <br>
    <a href="/TUWD/TP1/Vista/Ejercicio3.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>