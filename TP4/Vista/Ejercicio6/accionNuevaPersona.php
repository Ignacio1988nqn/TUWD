<?php
require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$datos = darDatosSubmitted();
$objPersona = new AbmPersona();

$busca = array('NroDni' => $datos['NroDni']);
$res = $objPersona->buscar($busca);

if (count($res) > 0) {
    $res = false;
    $men = "Este DNI ya esta registrado.";
} else {
    $res = $objPersona->alta($datos);
    if ($res == true) {
        $men = "La persona fue cargada exitosamente.";
    } else {
        $men = "ERROR. No se pudo registrar a la persona. ";
    }
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio6/actionNuevaPersona.twig.php', array('men' => $men));
