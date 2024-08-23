<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 6</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php
        include_once '../../Utils/datosSubmitted.php';
        include_once '../../Control/Mensaje.php';
        $datos = darDatosSubmitted();

        if ($datos != null) {

            $objMensaje = new Mensaje($datos);
            $estudios = $objMensaje->devolverNivel();
            $cantDep = $objMensaje->calcularDeportes();
            $mayor = $objMensaje->mayorEdad();
            // controlar 0 ingreso de deportes
            echo "Hola, yo soy " . $objMensaje->getNombre() . " " . $objMensaje->getApellido() . " tengo "
                . $objMensaje->getEdad() . " años, mi sexo es " . $objMensaje->getGenero() . ", vivo en " . $objMensaje->getDir() . ".<br>";
            echo "Nivel de estudios: " . $estudios . ".<br>";
            if ($cantDep >= 1) {
                echo "Cantidad de deportes que practico: " . $cantDep . ".<br>";
            } else {
                echo "No practico ningun deporte<br>";
            }
            echo "Soy " . $mayor . " de edad.<br>";
        } else {
            echo "<h2>No se recibieron datos</h2>";
        }
        ?>
        <br>
        <br>
        <a href="../Ejercicio6.php" class="btn btn-primary">Volver al formulario</a>
        <br>
        <br>
        <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>

</html>