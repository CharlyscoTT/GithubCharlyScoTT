<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title></title>

</head>
<p>Agregar Usuarios </p>
<body>
  <br>
  <br>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4col-xs-12">
      <form action="<?php echo base_url();?>index.php/Inicio/insertarusuarios" method="POST">
        <div class="form-group">
            <label for="text">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="text">Apellido:</label>
            <input type="text" class="form-control" name="apellido">        
        </div>    
        <input type="submit" name="Guardar">

    </form>
  </div>    
</div>

</body>
</html>