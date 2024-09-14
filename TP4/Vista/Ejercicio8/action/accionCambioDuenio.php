<?php 

require_once '../../../configuracion.php';

$datos = darDatosSubmitted() ; 

$objAuto = new AbmAuto(); 
$objPersona = new AbmPersona();
$patente = array('Patente' => $datos['Patente']);
$dni = array('DniDuenio' => $datos['DniDuenio']);
$arrAuto = $objAuto->buscar($patente);
$esDni = $objPersona->buscar($dni);

if ($arrAuto != null) {
    if (count($esDni)>0) {
        $auto = $arrAuto[0]; 
        $persona = $esDni[0];
        $nuevosDatos = ['Patente' => $datos['Patente'],'Marca' => $auto->getMarca(),'Modelo' => $auto->getModelo(),'DniDuenio' => $persona->getNroDni()];
        if ($objAuto->modificacion($nuevosDatos)) {
            $mensaje = "<h2>El dueño de la patente " . $datos['Patente'] . " fue cambiado con éxito</h2>";
        } else {
            $mensaje = "<h2>El dueño de la patente " . $datos['Patente'] . " NO se pudo modificar. Revise los datos.</h2>";
        }
    } else {
        $mensaje = "<h2>Esa persona no está registrada en nuestra base. Registre los datos y luego cambie el dueño.</h2>";
        ?>
        <a href="../../Ejercicio6/NuevaPersona.php" class="btn btn-primary">Registre a la persona</a>
        <?php
    }
} else {
    $mensaje = "<h2>La patente " . $datos['Patente'] . " no existe en nuestra base</h2>";
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
   
<div id="container" style="margin:50px 30px;">

    <?php
    
        echo  $mensaje;
    ?>
    <a href="../CambioDuenio.php" class="btn btn-primary">Volver</a>
     <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
   
</div>
</body>

</html>