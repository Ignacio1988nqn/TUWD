<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación del Proyecto</title>
    <link rel="stylesheet" href="../Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../Vista/assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        
<?php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
require_once '../vendor/autoload.php';

$loader = new FilesystemLoader('../Vista/estructura');
$twig = new Environment($loader);

$baseDir = '/TUWD-main/';
echo $twig->render('encabezado.twig', ['baseDir' => $baseDir]);?>
</head>
<body>
    <div class="container mt-5">
        <div class="mt-4">
            <h3>Menu de navegacion de PWD</h3>
            <p>Trabajo Practico Librerias - Twig y Krumo</p>
            <p>Implmentaciones relacionadas a libros y autores</p>
        </div>
        <nav>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="../Vista/verControl.php">Ver listados </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Vista/buscarLibro.php">Buscar Libro </a>
                </li>
            </ul>
        </nav>
        <button onclick="history.back()" class="btn btn-secondary mt-3">Volver Atrás</button>

    </div>    
</body>
</html>
