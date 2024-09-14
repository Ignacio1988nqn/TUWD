<?php 
include_once '../../../Utils/funciones.php'; 
include_once '../../../Control/AbmPersona.php';
$datos = darDatosSubmitted(); 
$objPersona = new AbmPersona();

$busca = array('NroDni' => $datos['NroDni']);
$res = $objPersona->buscar($busca); 

if (count($res)>0){
    $res = false; 
    $men = "Este DNI ya esta registrado.";
} else {
    $res = $objPersona->alta($datos);
    if ($res == true ){
        $men = "La persona fue cargada exitosamente.";
    } else {
        $men = "ERROR. No se pudo registrar a la persona. ";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>

<body>
   
<div id="container" style="margin:50px 30px;">

    <?php
    
        echo "<h2>" . $men. "</h2><br>";?>
</div>

    <a href="../NuevaPersona.php" class="btn btn-primary">Volver</a>
     <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
   
</body>

</html>