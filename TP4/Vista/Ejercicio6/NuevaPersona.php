<?php
require_once "../../configuracion.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

echo $twig->render('Ejercicio6/NuevaPersona.twig.php', array());
