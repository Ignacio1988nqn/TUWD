<?php
require_once '../vendor/autoload.php'; 

use Twig\Loader\FilesystemLoader;
use Twig\Environment;


$loader = new FilesystemLoader('./'); 
$twig = new Environment($loader);

echo $twig->render('buscarLibro.twig');