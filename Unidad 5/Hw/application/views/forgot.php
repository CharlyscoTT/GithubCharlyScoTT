<!doctype html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Unirse</title>

</head>

<br>
<br>
<br>
<br>

<body>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="class col-16">
                <div class="card login-form">
                    <div class="global-container">
                        <div class="card-body">
                            <h3 class="card-title text-center">Únete a HW-Dex</h3>
                            <div class="card-text">
                                <form>
                                    <!-- to error: add class "has-danger" -->
                                    <form action="registrararusuarios" method="POST">
                                    <div class="form-group">
                                        <label for="text">Usuario</label>
                                        <input type="user" class="form-control form-control-sm" name="usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Correo</label>
                                        <input type="email" class="form-control form-control-sm" name="correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Contraseña</label>

                                        <input type="password" class="form-control form-control-sm" name="contrasena">
                                    </div>
                                   
                                    <input type="submit" class="btn btn-light btn-block" href="rconexito"
                                        style="background-color: #00FF2F" name="guardar"> 
                                   </form>
                                </form>  
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</body>
</section>


</html>