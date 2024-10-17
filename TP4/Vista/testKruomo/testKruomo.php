<?php
require_once "../../configuracion.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

krumo::$skin = 'orange';

$array = krumo(array('a1'=> 'A1', 3, 'red'));
krumo($_SERVER, $_ENV);
krumo::backtrace();
krumo::includes();
krumo::functions();
krumo::classes();
krumo::defines();


$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);
echo $twig->render('home.twig.php', array());

