<html>
<head>
<title>Mostrar Estudiante</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<?php
include 'Estudiante.php';
//ingreso de los datos en variables locales para los procedimientos

$nombre= $_POST ['nombre'];
$identificacion= $_POST ['identificacion'];
$fechanacimiento= $_POST ['fechanacimiento'];
$valor= $_POST ['valor'];

$objEstudiante1=new Estudiante($nombre,$identificacion,$fechanacimiento,$valor);

?>
<div class="col-md-7">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Identificación</th>
      <th scope="col">Valor</th>
      <th scope="col">Valor con descuento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $objEstudiante1->getNombre();?></td>
      <td><?php echo $objEstudiante1->getIdentificacion();?></td>
      <td><?php echo $objEstudiante1->getvalor();?></td>
      <td><?php echo $objEstudiante1->getvalorDescuento();?></td>
    </tr>
  </tbody>
</table>
</div> 
</body>
</html>
