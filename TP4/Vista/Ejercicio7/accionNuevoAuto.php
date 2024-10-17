<?php

require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$datos = darDatosSubmitted();
$objPersona = new AbmPersona();
$busca = array('NroDni' => $datos['DniDuenio']);
$res = $objPersona->buscar($busca);
$men = null;
if (count($res) == 0) {
    $res = false;
    $men = "Este DNI NO esta registrado.";
}

$autoControl = new AbmAuto();
$busPatente = array('Patente' => $datos['Patente']);
$resAuto = $autoControl->buscar($busPatente);

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio7/actionNuevoAuto.twig.php', array('men' => $men, 'resAuto' => $resAuto, 'autoControl' => $autoControl, 'datos' => $datos, 'res' => $res));
