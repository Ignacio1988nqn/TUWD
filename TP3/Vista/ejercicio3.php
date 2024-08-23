<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta title="Ejercicio6">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">

    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/verificacion_jsquery.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<div id="container" style="margin:50px 400px">
    <form id="form" class="row g-3 form-style" action="./action/ej3.php" enctype="multipart/form-data" method="post">
        <div class="col-md-6">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
        </div>
        <div class="col-md-6">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores">
        </div>
        <div class="col-md-6">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" id="director" name="director" placeholder="Director">
        </div>
        <div class="col-md-6">
            <label for="guion" class="form-label">Guión</label>
            <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión">
        </div>
        <div class="col-md-6">
            <label for="produccion" class="form-label">Producción</label>
            <input type="text" class="form-control" id="produccion" name="produccion">
        </div>
        <div class="col-md-2">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" id="anio" name="anio" maxlength="4">
        </div>
        <div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
        </div>
        <div class="col-md-4">
            <label for="genero" class="form-label">Género</label>
            <select id="genero" name="genero" class="form-select selectpicker">
                <option value="" selected>Seleccione...</option>
                <option value="Comedia">Comedia</option>
                <option value="Drama">Drama</option>
                <option value="Ciencia Ficción">Ciencia Ficción</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="guion" class="form-label">Duración</label>
            <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Duración" maxlength="4">
        </div>
        <div class="col-md-8">
            <label for="restriccion" class="form-label" style="margin-left: 25px;">Restricción de edad</label>
            <div class="form-check">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio1" value="Todo público" checked="checked">
                    <label class="form-check-label" for="inlineRadio1">Todo público</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio2" value="Mayores de 7 años">
                    <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio2" value="Mayores de 18 años">
                    <label class="form-check-label" for="inlineRadio2">Mayores de 18 años</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
        </div>
        <div class="col-8">
            <label for="formFile" class="form-label">Subir una imagen de la pelicula</label>
            <input class="form-control" type="file" id="formFile" name="formFile" required>
        </div>
        <div class="col-12">
            <input type="reset" class="btn btn-light" style="border-color: lightgray; float:right" value="Borrar">
            <input type="submit" class="btn btn-info" style="border-color: lightgray;color:white; float:right" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>