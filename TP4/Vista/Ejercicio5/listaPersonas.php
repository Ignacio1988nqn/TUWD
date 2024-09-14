<?php 
require_once "../../configuracion.php";
$personaControl = new AbmPersona();
$personas = $personaControl->buscar("");
$hay = false;
if (count($personas)>0){
    $hay = true;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>TP 4 - Ejercicio 5 </title>
</head>

<body>
   
<div id="container" style="margin:50px 30px;">

    <?php
    
    if ($hay){
        echo "<h2>Lista de personas</h2>" ; 
        echo "<table cellspacing='20'>";
        echo "<tr>";
        echo "<td><strong> Nro Dni </strong></td>
            <td><strong> Apellido </strong></td>
            <td><strong> Nombre </strong></td>
            <td><strong> Fecha Nacimiento </strong></td>
            <td><strong> Telefono </strong></td>
            <td><strong> Domicilio </strong></td>";
        echo "</tr>";
        foreach($personas as $unaPersona){ 
            $dni = $unaPersona->getNroDni();
            $apellido = $unaPersona->getApellido(); 
            $nombre = $unaPersona->getNombre(); 
            $fechaNac = $unaPersona->getFechaNac();
            $telefono = $unaPersona->getTelefono(); 
            $domicilio = $unaPersona->getDomicilio();

            echo "<tr>";
            echo "<td>" . $dni . "</td> <td>" . $apellido . "</td> <td>" . $nombre . "</td><td>" . $fechaNac . "</td><td>" . $telefono . "</td><td>" . $domicilio. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<h3>No hay personas cargados en la base de datos</h3>";
    }?>
</div>

<a href="./autosPersona.php" class="btn btn-primary">Ver los autos de una persona</a> <br>
<br>
     <a href="../../..//index.html" class="btn btn-secondary"> Volver al menu principal </a>
   
</body>

</html>