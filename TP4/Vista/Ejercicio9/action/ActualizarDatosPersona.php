<?php

require_once '../../../configuracion.php';

$datos = darDatosSubmitted();

$objPersona = new AbmPersona();
$dni = array('NroDni' => $datos['NroDni']);
$res = $objPersona->buscar($dni);
if (count($res) > 0) {
    $persona = $res[0];
    $nuevosDatos = ['NroDni' => $datos['NroDni'], 'Apellido' => $datos['Apellido'], 'Nombre' => $datos['Nombre'], 'fechaNac' => $datos['fechaNac'], 'Telefono' => $datos['Telefono'], 'Domicilio' => $datos['Domicilio']];
    if ($objPersona->modificacion($nuevosDatos)) {
        $mensjae = "<h2>Datos cambiados con exito</h2>";
    } else {
        $mensjae = "<h2>No se modificaron los datos.</h2>";
    }
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

        <?php echo  $mensjae; ?>
        <hr>
        <a href="../BuscarPersona.php" class="btn btn-primary">Volver</a>
        <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>

    </div>
</body>

</html>