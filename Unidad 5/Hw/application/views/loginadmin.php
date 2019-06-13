<<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
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
                                <h3 class="card-title text-center">Admin HW-Dex</h3>
                                <div class="card-text">
                                    <!--
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                    <form action="xadmin" method="POST">
                                        <!-- to error: add class "has-danger" -->
                                        <div class="form-group">
                                            <label for="text">Correo</label>
                                            <input type="email" class="form-control form-control-sm" id="correo"
                                                aria-describedby="emailHelp" name="correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Contraseña</label>
                                            
                                            <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena">
                                        </div>
                                        <input href="xadmin" type="submit" name="guardar"class="btn btn-light btn-block" 
                                            style="background-color: #00FF2F"> 

                                        
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>