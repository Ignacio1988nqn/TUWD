<?php
require_once "../../configuracion.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$autoControl = new AbmAuto();
$autos = $autoControl->buscar("");
$hay = false;
if (count($autos) > 0) {
    $hay = true;
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio3/VerAutos.twig.php', array('hay' => $hay, 'autos' => $autos));
