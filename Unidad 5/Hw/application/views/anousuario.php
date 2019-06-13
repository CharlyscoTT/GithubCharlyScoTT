<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Año</title>
  </head>
  <body>
    
    <section>
    <div class="container fluid">
      <div class="class row ">
        <div class="class col-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #008CFF;">
            <a class="navbar-brand" href="inusuario">
              <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/f.png" width="108" height="40" class="d-inline-block align-top" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="listausuario">Lista</a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Categoría
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="colordepinturausuario">Tipo/Color de pintura</a>
                    <a class="dropdown-item" href="Tipodellantasusuario">Tipo de llantas</a>
                    <a class="dropdown-item" href="paisdefabricacionusuario">País de fabricación</a>
                    <a class="dropdown-item" href="anousuario">Año</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="marcausuario">Marca</a>
                    <a class="dropdown-item" href="modelousuario">Modelo</a>
                    <a class="dropdown-item" href="serieusuario">Serie</a>
                  </div>
                </li>

                <!--<li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
              </ul>
              <form action="inusuario" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-light " style="background-color: #00FF2F" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
                                      


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