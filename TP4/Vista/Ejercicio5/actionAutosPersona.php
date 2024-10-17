<?php
require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$data = darDatosSubmitted();
$param = array('NroDni' => $data['DniDuenio']);   //obtenemos el dni 

$objPersona = new AbmPersona();
$personas = $objPersona->buscar($param);
$hay = false;
$duenio = null;
$autos = null;

if (count($personas) > 0) {
    $hay = true;
    $duenio = $personas[0];      //toamos el primer y unico dni devuelto

    $objAuto = new AbmAuto();
    $autos = $objAuto->buscar(['DniDuenio' => $duenio->getNroDni()]);
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio5/actionAutosPersona.twig.php', array('hay' => $hay, 'duenio' => $duenio, 'autos' => $autos));
