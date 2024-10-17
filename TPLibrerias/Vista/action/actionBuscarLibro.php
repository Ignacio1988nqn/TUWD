<?php 
require_once '../../vendor/autoload.php';
require_once '../../configuracion.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
$loader = new FilesystemLoader([__DIR__, __DIR__.'/../estructura', __DIR__.'/../']);
$twig = new Environment($loader);

$datos = darDatosSubmitted();
$abmLibros = new AbmLibro(); 

if ($datos != null){
    $busca = array('Titulo' => $datos['Titulo']);
    $libros = $abmLibros->buscar($busca);

    if (count($libros)>0){
        $mensaje = "Libro Encontrado"; 
    } else {
        $mensaje = "ERROR";
    }
} else {
    $libros = []; 
    $libros = $abmLibros->buscar("");
    $mensaje = "";
}
echo $twig->render('listaLibros.twig', [
    'mensaje' => $mensaje,
    'libros' => $libros
]);
?>