<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php

    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio3/Control/Usuario.php';

    $username = $_POST['username'] ?? '' ;
    $password = $_POST['password'] ?? '';

    $login = Usuario::validarUsuario($username,$password);            //static para validar al usuario y no crear la instanica 
    if ($login){
        echo "<h2> Bienvenido $username! a la pagina Login </h2><br>";
        echo "<h4> Datos validados con exito </h4><br>";
    } else {
        echo "<h2>Error: Usuario o contraseña incorrectos.</h2>";
    }
    
    ?>
    <a href="/TP2/Ejercicio4/Vista/cinema.php">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>
</body>
</html>