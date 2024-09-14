<?php 

include_once '../../../Control/AbmPersona.php';
include_once '../../../Utils/funciones.php';
$datos = darDatosSubmitted(); 
$objPersona = new AbmPersona();

$dni = array('NroDni' => $datos['NroDni']);
$resDni = $objPersona->buscar($dni); 
$esta = false; 
if (count($resDni)>0){
    $esta = true ;
    $objPer = $resDni[0];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - Ejercicio 9 </title>
    <script src="../../assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="../../assets/js/JsJQuery/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/styles.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="../../assets/js/ejercicio9.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <?php if ($esta){ ?>
                <div class="col-md-6">
                <h2 class="text-center mb-4">Puede actualizar los datos del DNI: <?php echo $datos['NroDni'] ?> </h2> 
                <form id="form-E6" action="./ActualizarDatosPersona.php" method="post">
                    <input type="hidden" name="NroDni" value="<?php echo $objPer->getNroDni(); ?>">    
                    <div class="form-group">
                        <label for="Apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="Apellido" class="form-control" value="<?php echo $objPer->getApellido(); ?>"required>
                        <div class="invalid-feedback">El Apellido es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" required value="<?php echo $objPer->getNombre(); ?>">
                        <div class="invalid-feedback">El Nombre es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="fechaNac">Fecha de nacimiento:</label>
                        <input type="date" name="fechaNac" id="fechaNac" class="form-control" value="<?php echo $objPer->getFechaNac(); ?>" required>
                        <div class="invalid-feedback">La fechaNac de nacimiento es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Teléfono:</label>
                        <input type="text" name="Telefono" id="Telefono" class="form-control" value="<?php echo $objPer->getTelefono(); ?>"required>
                        <div class="invalid-feedback">El teléfono es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Domicilio">Domicilio:</label>
                        <input type="text" name="Domicilio" id="Domicilio" class="form-control" required value="<?php echo $objPer->getDomicilio(); ?>">
                        <div class="invalid-feedback">El Domicilio es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Realizar cambios</button>
                </form>
            </div>
            <?php } else { ?>
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Este DNI no está registrado en nuestra base. Intente nuevamente.</h2>
                    <a href="../BuscarPersona.php" class="btn btn-primary btn-block">Volver</a> <br>
                    <a href="../../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>