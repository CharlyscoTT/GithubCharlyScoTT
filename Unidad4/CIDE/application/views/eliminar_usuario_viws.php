<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Usuarios</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title></title>

</head>
<body>
<br>
  <br>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4col-xs-12">
      <form action="<?php echo base_url();?>index.php/Inicio/eliminar" method="POST">
        <div class="form-group">
            <label for="text">id:</label>
            <input type="text" class="form-control" name="id" placeholder="id">
        </div>
        <div class="form-group">
            <label for="text">id:</label>
            <input type="text" class="form-control" name="id" placeholder="Confirmar">        
        </div>    
        <input type="submit" name="Guardar">

    </form>
  </div>    
</div>
</body>
</html>