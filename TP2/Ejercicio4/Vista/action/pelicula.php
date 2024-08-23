<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
</head>
<body>
    <?php
    include_once 'C:/XAMPP/htdocs/TUWD/TP2/Ejercicio4/Control/edad.php';

    if ($_POST){
        $titulo = $_POST['titulo'];
        $actores = $_POST['actores'];
        $director = $_POST['director'];
        $guion = $_POST['guion'];
        $produccion = $_POST['produccion'];
        $anio = $_POST['anio'];
        $nacionalidad = $_POST['nacionalidad'];
        $genero = $_POST['genero'];
        $duracion = $_POST['duracion']; 
        $restriccion = $_POST['restriccion'] ;

        $resRestriccion = restriccionDeEdad($restriccion);

        echo "<h3>La pelicula introducida es </h3><br>"; 
        echo "<br>";
        echo "Titulo: " . $titulo . "<br>";
        echo "Actores: " . $actores . "<br>";
        echo "Director: " . $director . "<br>";
        echo "Guion: " . $guion . "<br>";
        echo "Produccion: " . $produccion . "<br>";
        echo "Año: " . $anio . "<br>";
        echo "Nacionalidad: " . $nacionalidad . "<br>";
        echo "Genero: " . $genero . "<br>";
        echo "Duracion: " . $duracion . "<br>";
        echo "Restricciones de edad: " . $resRestriccion . "<br>";


    } else {
        echo "<h2>Error. No se pudieron leer los datos. </h2>";
    }
    
    ?>
    <br>
    <a href="/TP2/Ejercicio4/Vista/cinema.php" class="btn btn-primary">Volver al formulario</a>
    <br>
    <br>
    <a href="/TUWD/index.html" class="btn btn-secondary"> Volver al menu principal </a>

</body>
</html>