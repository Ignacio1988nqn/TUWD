<?php
require_once "../../../configuracion.php";
$data = darDatosSubmitted();
$param = array('Patente' => $data['patente']);   //obtenemos la patente

$autoControl = new AbmAuto();
$autos = $autoControl->buscar($param);
$hay = false;
if (count($autos) > 0) {
    $hay = true;
    $auto = $autos[0];      //toamos el primer y unico auto devuelto 
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <?php
        if ($hay) {
            echo "<h2>Datos de la patente: " . $param['Patente'] . "</h2><br>";
            echo "<hr>";
            echo "<table>";
            echo "<tr>";
            echo "<td><strong> Patente </strong></td>
            <td><strong> Marca  </strong></td>
            <td><strong> Modelo </strong></td>
            <td><strong> Nombre Dueño</strong></td>
            <td><strong> Apellido Dueño </strong></td>";
            echo "</tr>";
            $patente = $auto->getPatente();
            $marca = $auto->getMarca();
            $modelo = $auto->getModelo();
            $duenio = $auto->getDuenio();

            $nombre = $duenio->getNombre();
            $apellido = $duenio->getApellido();
            echo "<tr>";
            echo "<td>" . $patente . "</td> <td>" . $marca . "</td> <td>" . $modelo . "</td><td>" . $nombre . "</td><td>" . $apellido . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
        } else {
            echo "<h3>La patente " . $param['Patente'] . " no se encuentra en nuestra base de datos</h3>";
        } ?>

        <a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
        <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
    </div>
</body>
</html>