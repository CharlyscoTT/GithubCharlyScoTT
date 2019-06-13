<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login/Sign-Up</title>
</head>

<section>
    <br>
    <br>
    <br>
    <br>
    <br>

    <body>
        <div class="container fluid ">
            <div class="class row justify-content-center align-items-center">
                <div class="class col-16">

                    <div class="global-container">
                        <div class="card login-form">
                            <div class="card-body">
                                <h3 class="card-title text-center">Inicia sesión en HW-Dex</h3>
                                <div class="card-text">
                                    <!--
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                    <form action="xusuario" method="POST">
                                        <!-- to error: add class "has-danger" -->
                                        <div class="form-group">
                                            <label for="texto">Correo</label>
                                            <input type="email" class="form-control form-control-sm" id="correo"
                                                aria-describedby="emailHelp" name="correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="texto">Contraseña</label>
                                            <a href="#" style="float:right;font-size:12px;">¿No recuerdas tu
                                                contraseña?</a>
                                            <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena">
                                        </div>
                                        <input href="xusuario" type="submit" name="guardar"class="btn btn-light btn-block" 
                                            style="background-color: #00FF2F"> 

                                        <div class="sign-up">
                                            <div class="class card-body">
                                                ¿Vienes a crear una cuenta? <a href="forgot">Clic aquí</a>.
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section>

</body>