<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 1</title>
</head>
<body>
    <?php
    $dir = "C:/XAMPP/htdocs/TUWD/TP3/Archivos/"; // Definimos Directorio donde se guarda el archivo
    
    $uploadFile = $dir . basename($_FILES['miArchivo']['name']);

    if ($_FILES['miArchivo']["error"] <= 0) {
        echo "Tipo: " . $_FILES['miArchivo']['type'] . "<br />"; 
        $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['miArchivo']['size'];

    if ($fileType !== 'pdf' && $fileType !== 'doc') {
        echo "<p>El archivo debe ser en formato PDF o DOC.</p>";
    } elseif ($fileSize > 2 * 1024 * 1024) {
        echo "<p>El tamaño del archivo debe ser menor o igual a 2MB.</p>";
    } else {
        if (move_uploaded_file($_FILES['miArchivo']['tmp_name'], $uploadFile)) {
            
            echo "<p>Archivo subido exitosamente: <a href='$uploadFile' target='_blank'>$uploadFile</a></p>";
        } else {
            echo "<p>Hubo un error al subir el archivo.</p>";
        }
    }
    }else 
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        ?>
    
    <br>
    <a href="/TUWD/TP3/Vista/Ejercicio1.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>

</body>
</html>