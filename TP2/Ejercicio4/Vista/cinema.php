<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>

    <link rel="stylesheet" href="/TUWD/TP2/Ejercicio4/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.css.min">
    <link rel="stylesheet" href="/TUWD/TP2/Ejercicio4/Vista/assets/bootstrap-5.1.3-dist/css/">
    <script src="/TUWD/TP2/Ejercicio4/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio4/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio4/Vista/assets/verificacion_jsquery.js"> </script>
</head>
<body>
    <div class="container met-5">
        <div class="text-center mb-4">
            <h3>Cinem@as</h3>
        </div>
        <div class="">
            <form id="form" action="action/pelicula.php" method="post" class="needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="titulo" class="form-label">Titulo </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
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
                    <label for="guion" class="form-label">Guion</label>
                    <input type="text" class="form-control" id="guion" name="guion" placeholder="Guion">
                </div>
                <div class="col-md-6">
                    <label for="produccion" class="form-label">Produccion</label>
                    <input type="text" class="form-control" id="produccion" name="produccion">
                </div>
                <div class="col-md-6">
                    <label for="anio" class="form-label">Año</label>
                    <input type="text" class="" id="anio" name="anio">
                </div>
                <div class="col-md-6">
                    <label for="nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                </div>
                <div>
                <div class="col-md-6">
                    <label for="genero" class="form-label">Genero</label>
                    <select id="genero" name="genero" require >
                        <option value="comedia">Comedia</option>
                        <option value="romance">Romance</option>
                        <option value="drama">Drama</option>
                        <option value="accion">Accion</option>
                        <option value="terror">Terror</option>
                        <option value="ciencia">Ciencia Ficcion</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="musical">Musical</option>
                        <option value="animacion">Animacion</option>
                        <option value="fantasia">Fantasia</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="text" class="form-control" id="duracion" name="duracion">
                </div>
                <div class="col-md-6">
                    <label for="restriccion">Restricciones de edad</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="todos" name="restriccion" value="todos">
                        <label for="todos"  class="form-check-label"> Todos los publicos </label> <br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="mayores7" name="restriccion" value="mayores7" >
                        <label for="mayores7" class="form-check-label" > Mayores de 7 años </label> <br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="mayores18" name="restriccion" value="mayores18" class="form-check-input">
                        <label for="mayores18"  class="form-check-label"> Mayores de 18 años</label> <br>
                    </div>
                </div>
                <div class="col-12">
                    <label for="sipnosis" class="form-label">Sipnosis</label><br>
                    <textarea id="sipnosis" name="sipnosis" rows="8" cols="50"></textarea> <br>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>
            </form>
        </div>

    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>