<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin Editar Coche</title>
   </head>
    <body background="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/2.jpg">

     
  <section>
    <div class="container fluid">
      <div class="class row ">
        <div class="class col-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #008CFF;">
            <a class="navbar-brand" href="adminmenu">
              <img src="https://raw.githubusercontent.com/CharlyscoTT/GithubCharlyScoTT/master/imagenes/f.png" width="108" height="40" class="d-inline-block align-top" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
               </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="adminagregarcoche">Agregar coche</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="baja">Eliminar coche</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="ed">Editar coche</a>
                  <li class="nav-item active">
                  <a class="nav-link" href="index">Salir</a>
                </li>
                </li> 
            </div>
          </nav>   
  </section>
 <br>
  <br>
  <main role="mian" class="container">
    <div class="row">
    <div class="col-lg-4 col-lg-offset-4col-xs-12">
      <div class="row justify-content-center">
      <div class="card">
      <form action="editar" method="POST">
        <div class="card-body">
          <h3 class="card-title text-center">Editar Coche</h3>
        <div class="form-group">
            <label for="text">Id:</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="text">Modelo:</label>
            <input type="text" class="form-control" name="modelo">
        </div>
        <div class="form-group">
            <label for="text">Marca:</label>
            <input type="text" class="form-control" name="marca">        
        </div>
        <div class="form-group">
            <label for="text">país:</label>
            <input type="text" class="form-control" name="pais">        
        </div>  
        <div class="form-group">
            <label for="text">Año:</label>
            <input type="text" class="form-control" name="ano">        
        </div>  
        <div class="form-group">
            <label for="text">Color:</label>
            <input type="text" class="form-control" name="color">        
        </div>
        <div class="form-group">
            <label for="text">Serie:</label>
            <input type="text" class="form-control" name="serie">        
        </div>        
        <input type="submit" name="Guardar">
      </div>
    </form>
  </div>
</div>
  </div>    
  </div>
   </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>