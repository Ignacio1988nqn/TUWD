<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario - Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilo3.css" media="screen" />
</head>
<body>
    <form action="action/verdatos5.php" method="GET">  <!-- action: a donde se enviara el formulario (pag php)--> 
        
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
        <label for="sexo">Sexo: </label> 
        <input type="text" id="sexo" name="sexo"> 
        <br>
        <br> 
        <h2> Seleccione su nivel de estudio: </h2>
        <input type="radio" id="1" name="nivel" value="1">
        <label for="1">Ninguno </label>
        
        <input type="radio" id="2" name="nivel" value="2" >
        <label for="2">Primario </label>
        
        <input type="radio" id="3" name="nivel" value="3" >

        <label for="3">Secundario </label>
        <br> 
        <br> 

        <button type="submit">Enviar</button>
    </form>
</body>
</html>