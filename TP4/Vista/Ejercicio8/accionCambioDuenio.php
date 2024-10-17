<?php

require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$datos = darDatosSubmitted();

$objAuto = new AbmAuto();
$objPersona = new AbmPersona();
$patente = array('Patente' => $datos['Patente']);
$dni = array('DniDuenio' => $datos['DniDuenio']);
$arrAuto = $objAuto->buscar($patente);
$esDni = $objPersona->buscar($dni);

if ($arrAuto != null) {
    if (count($esDni) > 0) {
        $auto = $arrAuto[0];
        $persona = $esDni[0];
        $nuevosDatos = ['Patente' => $datos['Patente'], 'Marca' => $auto->getMarca(), 'Modelo' => $auto->getModelo(), 'DniDuenio' => $persona->getNroDni()];
        if ($objAuto->modificacion($nuevosDatos)) {
            $mensaje = "El dueño de la patente " . $datos['Patente'] . " fue cambiado con éxito";
        } else {
            $mensaje = "El dueño de la patente " . $datos['Patente'] . " NO se pudo modificar. Revise los datos.";
        }
    } else {
        $mensaje = "Esa persona no está registrada en nuestra base. Registre los datos y luego cambie el dueño.";
?>
        <a href="../../Ejercicio6/NuevaPersona.php" class="btn btn-primary">Registre a la persona</a>
<?php
    }
} else {
    $mensaje = "La patente " . $datos['Patente'] . " no existe en nuestra base";
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio8/actionCambioDuenio.twig.php', array('mensaje' => $mensaje));


?>