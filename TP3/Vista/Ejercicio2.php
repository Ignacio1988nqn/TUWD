<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=""></script>
    <script src=""></script>
    <script src="validar.js"> </script>
    <title>Subir TXT</title>
</head>
<body>
    <h2>Subir archivo en txt </h2>
    <form action="verArchivo.php" method="post" enctype="multipart/form-data" id="form" name="form" onsubmit="return validar()">
        <label for="archivo">Seleccione el archivo TXT: </label>
        <input type="file" id="archivo" name="archivo"> 
        <br>
        <br>
        <button type="submit" id="enviar" name="enviar"> Enviar </button>
    </form>
</body>
</html>