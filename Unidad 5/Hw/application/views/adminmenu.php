<?php
$data=$this->Usuarios->admivercoche();
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
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
                </li>
                 <li class="nav-item active">
                  <a class="nav-link" href="index">Salir</a>
                </li>

              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
    
     <center>
       <br/><br/><br/><br/>
       <main role="mian" class="container">
           <table class="table table-dark">
  <thead>
    <tr>
      <th>id</th>
      <th>Modelo</th>
      <th>marca</th>
      <th>país</th>
      <th>Año</th>
      <th>Color</th>
      <th>Serie</th>
    </tr>
  </thead>
  
  <?php 
    foreach ($data as $fila) 
    {
   ?>
  <tbody>
    <tr>
    <td scope="col"><?=$fila['id'];?></td>
    <td scope="col"><?=$fila['modelo'];?></td> 
    <td scope="col"><?=$fila['marca'];?></td>
    <td scope="col"><?=$fila['pais'];?></td> 
    <td scope="col"><?=$fila['ano'];?></td>
    <td scope="col"><?=$fila['color'];?></td> 
    <td scope="col"><?=$fila['serie'];?></td>
  </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    

     
    
  </tbody>
       <?php
}
?>
</table>   
       </main>
       </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>