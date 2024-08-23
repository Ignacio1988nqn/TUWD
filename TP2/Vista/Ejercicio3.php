<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta title="Ejercicio6">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <script src="./assets/js/JsJQuery/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/JsJQuery/jquery.validate.min.js"></script>
    <script src="./assets/js/validacion.js"> </script>
</head>

<body>
    <div id="container" style="margin:50px 300px">
        <div id="myModal" class="modal fade show" aria-modal="true" style="display: block;background-color:dimgrey">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Member Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form id="form" action="./action/verificaPass.php" method="get" onSubmit="return verificar()">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" placeholder="usuario" name="usuario" id="usuario">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>