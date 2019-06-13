<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hw</title>
</head>

<body>

  <section>
    <div class="container fluid">
      <div class="class row ">
        <div class="class col-12">
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #008CFF;">
            <a class="navbar-brand" href=index>
              <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/f.png" width="108" height="40" class="d-inline-block align-top" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="login">Entrar/Registro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="loginadmin">Admin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="listageneral">Lista</a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Categoría
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login">Tipo/Color de pintura</a>
                    <a class="dropdown-item" href="login">Tipo de llantas</a>
                    <a class="dropdown-item" href="login">País de fabricación</a>
                    <a class="dropdown-item" href="login">Año</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login">Marca</a>
                    <a class="dropdown-item" href="login">Modelo</a>
                    <a class="dropdown-item" href="login">Serie</a>
                  </div>
                </li>
                

                <!--<li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-light " style="background-color: #00FF2F" type="submit">Buscar</button>
              </form>
            </div>
          </nav>

        </div>
      </div>
    </div>
  </section>

  <!--carrusel-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/fr512.png" class="d-block w-100" width="750" height="562.5" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="Color:#000000">
                    <h5>Un corcel indomable:</h5>
                    <p>Añadido recientemente a HW-Dex, el Ferrari 512 Tr</p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/nissan300XZ.jpg" class="d-block w-100" width="750" height="562.5" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="Color:#000000">
                    <h5>Consejos para Custom</h5>
                    <p>Todo lo que necesitas saber para personalizar tus autitos.</p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/new.jpg" class="d-block w-100" width="750" height="562.5" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Salidito del horno</h5>
                    <p>Echa un vistazo a los autos que hay hasta la fecha de la linea básica</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>