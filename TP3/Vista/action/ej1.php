<?php
include_once "../../Control/StoreFile.php";

$obj = new StoreFile($_FILES["formFile"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($obj->gettarget_file(), PATHINFO_EXTENSION));
$error = 1;
$mensaje = "";
$mensajesize = "";

if ($_FILES['formFile']["error"] <= 0) {

    if ($imageFileType != "doc" && $imageFileType != "pdf") {
        $mensaje = "Solo son aceptados archivos con extension .DOC y .PDF";
        $uploadOk = 0;
    }
    if ($_FILES["formFile"]["size"] / 1024 > 2048) {
        $mensajesize = "El tamaño del archivo supera el límite permitido (2 MB)";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (!$obj->store()) {
            echo "ERROR: no se pudo cargar el archivo ";
        } else {
            $error = 0;
            $link = $obj->gettarget_dir() . $_FILES["formFile"]["name"];
        }
    }
} else {
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
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
            <p><?php if ($uploadOk == 0) {
                    echo  $mensaje;
                    echo  $mensajesize;
                } ?> </p>
            <p><?php if ($error == 0) {
                    echo  "El archivo se guardo satisfactoriamente:<br><br>";
                    echo "<a href='$link' target='_blank'>Descargar Archivo</a>";
                } ?> </p>
            <br>
            <a href="../Ejercicio1.php" class="btn btn-primary">Volver</a>
            <br>
            <br>
            <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
        </div>
    </div>
</body>

</html>