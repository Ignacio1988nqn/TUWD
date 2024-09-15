<?php

require_once '../../../configuracion.php';

$datos = darDatosSubmitted();
$objPersona = new AbmPersona();
$busca = array('NroDni' => $datos['DniDuenio']);
$res = $objPersona->buscar($busca);
//var_dump($datos); // prueba para ver que devuelve 
if (count($res) == 0) {
    $res = false;
    $men = "Este DNI NO esta registrado.";
}

$autoControl = new AbmAuto();
$busPatente = array('Patente' => $datos['Patente']);
$resAuto = $autoControl->buscar($busPatente);

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
        if ($res == false) {
            echo "<h2>" . $men . "</h2>";
            echo "<h4>Ingrese los datos de una persona valida para luego agregar los datos del nuevo auto con dicha persona</h4>"
        ?>
            <br>
            <a href="../../Ejercicio6/NuevaPersona.php" class="btn btn-primary"> Cargar a una persona</a>
        <?php
        } else {
            if (count($resAuto) == 0) {
                if ($autoControl->alta($datos)) {
                    echo "<h2>El auto se ha registrado con exito </h2>";
                } else {
                    echo "<h2>ERROR. No se pudo registrar el auto. Revise los datos.";
                }
            } else {
                echo "<h2>ERROR. Esta patente ya esta registrada</h2>";
            }
        }
        ?>
        <hr>
        <a href="../NuevoAuto.php" class="btn btn-secondary">Volver</a>
        <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>

    </div>

</body>

</html>