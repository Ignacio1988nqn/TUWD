<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir TXT</title>
</head>
<body>
   <?php
    $dir = "C:/XAMPP/htdocs/TUWD/TP3/Archivos/";
    $uploadFile = $dir . basename($_FILES['archivo']['name']); //contrye la ruta completa en donde se guarda el archivo

    if($_FILES['archivo']["error"] <=0){
        $file = $_FILES['archivo']['tmp_name'];
        $contenido = file_get_contents($file); // Transmite un fichero completo a una cadena
        if (move_uploaded_file($file, $uploadFile)){         //pongo el archivo en mi dir 
            echo "<h2> Contenido del TXT: </h2> "; 
            echo "<br>" ; 
            echo "<textarea rows='30' cols='80'> " . htmlspecialchars($contenido). "</textarea>"; //htmlspe... convierte caracteres especiales en entidades html
        } 
   } else {
        echo "<p> Ocurrio un error en la carga. </p>";
   }
   ?>
   <br>
   <a href="/TUWD/TP3/Vista/Ejercicio2.php" class="btn btn-primary">Volver al formulario</a>
   <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>

</body>
</html>