<?php
require_once "../../configuracion.php";
$autoControl = new AbmAuto();
$autos = $autoControl->buscar("");
$hay = false;
if (count($autos) > 0) {
    $hay = true;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>TP 4 - Ejercicio 3</title>
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <div>
            <?php
            if ($hay) {
                echo "<h2>Lista de Autos</h2>";
                echo "<hr>";
                echo "<table cellspacing='20'>";
                echo "<tr>";
                echo "<td><strong> Patente </strong></td>
            <td><strong> Marca  </strong></td>
            <td><strong> Modelo </strong></td>
            <td><strong> Nombre Dueño</strong></td>
            <td><strong> Apellido Dueño </strong></td>";
                echo "</tr>";
                foreach ($autos as $auto) {
                    $patente = $auto->getPatente();
                    $marca = $auto->getMarca();
                    $modelo = $auto->getModelo();
                    $duenio = $auto->getDuenio();

                    $nombre = $duenio->getNombre();
                    $apellido = $duenio->getApellido();
                    echo "<tr>";
                    echo "<td>" . $patente . "</td> <td>" . $marca . "</td> <td>" . $modelo . "</td><td>" . $nombre . "</td><td>" . $apellido . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<hr>";
            } else {
                echo "<h3>No hay autos cargados en la base de datos</h3>";
            } ?>
        </div>
        <div>
            <br>
            <a href="../../menu/index.html" class="btn btn-primary">Volver</a>
            <br>
            <br>
            <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
        </div>
    </div>
</body>
</html>