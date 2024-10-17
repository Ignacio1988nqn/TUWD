<?php
require_once "../../configuracion.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$data = darDatosSubmitted();
$param = array('Patente' => $data['patente']);   //obtenemos la patente

$autoControl = new AbmAuto();
$autos = $autoControl->buscar($param);
$hay = false;
if (count($autos) > 0) {
    $hay = true;
    $auto = $autos[0];      //toamos el primer y unico auto devuelto 
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);
echo $twig->render('ejercicio4/accionBuscarAuto.twig.php', array('hay' => $hay, 'autos' => $autos, 'patente' => $param['Patente']));
