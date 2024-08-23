<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="/TUWD/TP2/Ejercicio3/Vista/assets/bootstrap-5.1.3-dist/css/bootstrap.css.min">
    <link rel="stylesheet" href="/TUWD/TP2/Ejercicio3/Vista/assets/bootstrap-5.1.3-dist/css/">
    <script src="/TUWD/TP2/Ejercicio3/Vista/assets/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio3/Vista/assets/JsJQuery/jquery.validate.min.js"></script>
    <script src="/TUWD/TP2/Ejercicio3/Vista/assets/validacion.js"> </script>
</head>
<body>

<div class="">
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <h3 class="text-center">Member Login</h3>
                        <form id="form" action="action/verificaPass.php" method="post" >
                            <div class="">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100" id="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="/TUWD/TP2/Ejercicio3/Vista/assets/bootstrap-5.1.3-dist/js"></script>
</body>