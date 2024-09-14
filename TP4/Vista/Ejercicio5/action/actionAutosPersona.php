<?php 
require_once '../../../configuracion.php';

$data = darDatosSubmitted(); 
$param = array('NroDni' => $data['DniDuenio']);   //obtenemos el dni 

$objPersona = new AbmPersona();
$personas = $objPersona->buscar($param);
$hay = false;
if (count($personas)>0){
    $hay = true;
    $duenio = $personas[0];      //toamos el primer y unico dni devuelto

    $objAuto = new AbmAuto();
    $autos = $objAuto->buscar(['DniDuenio' => $duenio->getNroDni()]);
    
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
    
    if ($hay){
        echo "<h2> Informacion del dueño </h2><br>";
        echo "<strong> Nombre: </strong>" . $duenio->getNombre() . " <br> "; 
        echo " <strong>Apellido:</strong> " . $duenio->getApellido() . " <br> "; 
        echo " <strong>Fecha de nacimiento: </strong>" . $duenio->getFechaNac() . " <br> "; 
        echo " <strong>Telefono: </strong>" . $duenio->getTelefono() . " <br> "; 
        echo " <strong>Domicilio:</strong> " . $duenio->getDomicilio() . " <br> "; 
        echo "<br>";
       
        if (count($autos)>0){
            echo "<h2>Datos de los autos asociados al DNI: " . $duenio->getNroDni() . "</h2><br>"; 
            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<td><strong> Patente </strong></td>
            <td><strong> Marca  </strong></td>
            <td><strong> Modelo </strong></td>";
            echo "</tr>";
            foreach($autos as $unAuto){
                $patente = $unAuto->getPatente();
                $marca = $unAuto->getMarca(); 
                $modelo = $unAuto->getModelo(); 
                echo "<tr>";
                echo "<td>" . $patente . "</td> <td>" . $marca . "</td> <td>" . $modelo . "</td>" ;
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<h2 class='text-danger'> Esta persona no tiene autos cargados. </h2>";
        }
    } else {
        echo "<h3 class='text-danger'>El DNI " . $data['DniDuenio'] . " no se encuentra en nuestra base de datos</h3>";
    }?>
     <a href="../autosPersona.php" class="btn btn-primary">Volver</a>
     <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</div>

   
</body>

</html>