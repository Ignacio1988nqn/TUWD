<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="newport" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div id="container" style="margin:50px 300px;">
        <div id="container" style="margin:50px 300px;">
            <div>
                <div class="alert alert-success" role="alert">
                    <h1 style="color:cornflowerblue">La pelicula Introducida es: </h1>
                    <br>
                    <p><b>Título: </b><?php echo $_POST["titulo"]; ?> </p>
                    <p><b>Actores: </b><?php echo $_POST["actores"]; ?> </p>
                    <p><b>Director: </b><?php echo $_POST["director"]; ?> </p>
                    <p><b>Guión: </b><?php echo $_POST["guion"]; ?> </p>
                    <p><b>Producción: </b><?php echo $_POST["produccion"]; ?> </p>
                    <p><b>Año: </b><?php echo $_POST["anio"]; ?> </p>
                    <p><b>Nacionalidad: </b><?php echo $_POST["nacionalidad"]; ?> </p>
                    <p><b>Género: </b><?php echo $_POST["genero"]; ?> </p>
                    <p><b>Duración: </b><?php echo $_POST["duracion"]; ?> </p>
                    <p><b>Restricción de edad: </b><?php echo $_POST["restriccion"]; ?> </p>
                    <p><b>Sinopsis: </b><?php echo $_POST["sinopsis"]; ?> </p>
                </div>
            </div>

            <br>
            <a href="../Ejercicio4.php" class="btn btn-primary">Volver al Formulario</a>
            <br>
            <br>
            <a href="../../../index.html" class="btn btn-secondary"> Volver al menu principal </a>
        </div>
    </div>
</body>

</html>