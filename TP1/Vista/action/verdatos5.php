<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 5</title>
    <link rel="stylesheet" href="/TUWD/TP1/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">

</head>
<body>
    <?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Utils/datosSubmitted.php';
    include_once 'C:/XAMPP/htdocs/TUWD/TP1/Control/Mensaje.php';

    $datos = darDatosSubmitted();
    if ($datos!=null){

        $objMensaje = new Mensaje($datos);
        $estudios = $objMensaje->devolverNivel(); 
        $mayor = $objMensaje->mayorEdad();

        echo "Hola, yo soy " . $objMensaje->getNombre() . " " . $objMensaje->getApellido() . " tengo "
        . $objMensaje->getEdad() . " años, mi sexo es " . $objMensaje->getGenero(). ", vivo en " . $objMensaje->getDir() . ".<br>";
        echo "Nivel de estudios: " . $estudios . ".<br>";
        echo "Soy " . $mayor . " de edad <br>";
    } else {
        echo "<h2>No se recibieron datos</h2>";
    }
    ?>
    <br>
    <br>
    <a href="/TUWD/TP1/Vista/Ejercicio5.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>