<?php
$data = $this->Usuarios->verusuarios(); 
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial -scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Usuarios</title>
  <link rel= "stylesheet" hreft="<?php echo base_url("bootstrap/css/boootstrap.min.css");?>"/>
    <link rel= "stylesheet" hreft="<?php echo base_url("bootstrap/css/datepicker3.css");?>"/>
    <link rel= "stylesheet" hreft="<?php echo base_url("bootstrap/css/style.css");?>"/>
    <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>
<center>
  <h1>ITPA</h1></center>
  <table class="table table-striped"  style="width: 100%">
  <tr><center>
    <p>Tabla Usuarios </p>
      </center>
    <th>ID</th>
    <th>Nombre</th> 
    <th>Apellido</th>
  </tr>

  <?php 
    foreach($data as $fila)
   {
  ?>

  <tr>
    <td><?=$fila['id'];?></td>
    <td><?=$fila['nombre'];?></td> 
    <td><?=$fila['apellido'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
  </tr>
  <?php
}
?>
</table>

</body>
</html>

