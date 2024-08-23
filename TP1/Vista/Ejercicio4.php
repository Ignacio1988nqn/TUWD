<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilo3.css" media="screen" />
</head>
<body>
    <form action="action/verdatos4.php" method="GET">  <!-- action: a donde se enviara el formulario (pag php)--> 
        
        <br> 
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <br>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad">
        <br>
        <br>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion">
        <br>
        <br>
       
        <button type="submit">Enviar</button>
    </form>
</body>
</html>