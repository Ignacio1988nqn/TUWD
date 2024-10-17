<?php 

require_once '../../configuracion.php';
require_once __DIR__. '../../../Utils/Librerias/krumo-master/class.krumo.php'; //para incluir el krumo
$abmAutor = new AbmAutor();
$arrLyA = $abmAutor->listaAutoresLibros();
require_once '../../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader([__DIR__, __DIR__.'/../estructura', __DIR__.'/../']);
$twig = new \Twig\Environment($loader);

echo $twig->render('listaAutores.twig', ['autores' => $arrLyA]);
krumo($arrLyA);