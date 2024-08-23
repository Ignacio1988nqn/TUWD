<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 8</title>
</head>
<body>
    <h2> Calcular Tarifa de Entrada </h2>
    <form action="action/vertarifa.php" method="GET">  <!-- action: a donde se enviara el formulario (pag php)--> 
        
        <label for="edad">Ingrese su edad: </label>
        <input type="number" id="edad" name="edad">
        <br>
        <br>
        <label for="estudiante"> Estudiante? </label>
        <input type="radio" id="si" name="estudiante" value="si">
        <label for="si"> Si </label>
        <input type="radio" id="no" name="estudiante" value="no">
        <label for="no">No </label>
        <br>
        <br>
        <button type="submit"> Calcular tarifa </button>
        <button type="reset"> Limpiar </button>
</body>
</html>