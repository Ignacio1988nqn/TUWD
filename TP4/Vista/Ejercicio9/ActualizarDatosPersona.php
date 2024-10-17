<?php

require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$datos = darDatosSubmitted();

$objPersona = new AbmPersona();
$dni = array('NroDni' => $datos['NroDni']);
$res = $objPersona->buscar($dni);
if (count($res) > 0) {
    $persona = $res[0];
    $nuevosDatos = ['NroDni' => $datos['NroDni'], 'Apellido' => $datos['Apellido'], 'Nombre' => $datos['Nombre'], 'fechaNac' => $datos['fechaNac'], 'Telefono' => $datos['Telefono'], 'Domicilio' => $datos['Domicilio']];
    if ($objPersona->modificacion($nuevosDatos)) {
        $mensjae = "Datos cambiados con exito";
    } else {
        $mensjae = "No se modificaron los datos.";
    }
}

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio9/actualizarDatosPersona.twig.php', array('mensjae' => $mensjae));
