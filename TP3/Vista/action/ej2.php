<?php
include_once "../../Control/StoreFile.php";

$obj = new StoreFile($_FILES["formFile"]);
$imageFileType = strtolower(pathinfo($obj->gettarget_file(), PATHINFO_EXTENSION));
$error = 1;

if ($_FILES['formFile']["error"] <= 0) {    
    if (!$obj->store()) {
        echo "ERROR: no se pudo cargar el archivo ";
    } else {
        $error = 0;
        $link =  $obj->gettarget_dir(). $_FILES["formFile"]["name"];
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
            <p><?php if ($imageFileType == "txt" && $error == 0) {                
                    echo "<textarea rows='4' cols='50'>".file_get_contents($link)."</textarea>";
                } ?> </p>
            <br>
            <a href="../Ejercicio2.php" class="btn btn-primary">Volver</a>
            <br>
            <br>
            <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
        </div>
    </div>
</body>

</html>