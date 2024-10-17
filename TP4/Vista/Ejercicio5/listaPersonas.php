<?php
require_once "../../configuracion.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$personaControl = new AbmPersona();
$personas = $personaControl->buscar("");
$hay = false;
if (count($personas) > 0) {
    $hay = true;
}


$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio5/listaPersonas.twig.php', array('hay' => $hay, 'personas' => $personas));
