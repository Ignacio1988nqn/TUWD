<?php 

include_once '../../Control/AbmAutor.php';
require_once __DIR__. '../../../Utils/Librerias/krumo-master/class.krumo.php';
$abmAutor = new AbmAutor();
$arrLyA = $abmAutor->listaAutoresLibros();
require_once '../../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader([__DIR__, __DIR__.'/../estructura', __DIR__.'/../']);
$twig = new \Twig\Environment($loader);
krumo($arrLyA);
echo $twig->render('listaAutores.twig', ['autores' => $arrLyA]);