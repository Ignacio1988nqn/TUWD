<?php

require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$datos = darDatosSubmitted();
$objPersona = new AbmPersona();

$dni = array('NroDni' => $datos['NroDni']);
$resDni = $objPersona->buscar($dni);
$esta = false;
$objPer = null;
if (count($resDni) > 0) {
    $esta = true;
    $objPer = $resDni[0];
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio9/actionBuscarPersona.twig.php', array('esta' => $esta, 'objPer' => $objPer));
