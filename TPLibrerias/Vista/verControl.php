
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación del Proyecto</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../Vista/assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        
<?php
require_once '../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
$loader = new FilesystemLoader(['./estructura', './']);  //incluye a estructura y vista
$twig = new Environment($loader);

$baseDir = '/TUWD-main/';
echo $twig->render('encabezado.twig', ['baseDir' => $baseDir]);

?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Sistema de Libros y Autores </h2>
        <div class="text-center">
            <br>
            <br>
            <a href="./action/actionBuscarLibro.php" class="btn btn-primary">Ver Libros</a>
            <a href="./action/actionListarAutores.php" class="btn btn-primary">Ver Autores</a>
        </div>
    </div>
<br>
<br>
<?php
echo $twig->render('pie.twig'); 
?>

</body>
</html>