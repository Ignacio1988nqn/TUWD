<?php
include_once "../../Control/Verificar.php";

$verificar = new Verificar($_GET["usuario"], ($_GET["password"]));
if ($verificar->verificar()) {
    $message = "Bienvenido al Sistema";
} else {
    $message = "Error al intentar logearse, usuario o contraseña incorrecta";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="newport" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../style.ccs">

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <div id="container" style="margin:50px 300px;">
            <p><?php echo  $message; ?> </p>

            <br>
            <a href="../Ejercicio3.php" class="btn btn-primary">Volver al Login</a>
            <br>
            <br>
            <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
        </div>
    </div>
</body>

</html>