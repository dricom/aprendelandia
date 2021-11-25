<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel ='stylesheet'  href ='./style.css'/>
</head>
<body>

<div class='container-fluid'>
    <h1>Ejemplo</h1><br/>
    <div class='row'>
    <div class="col-md-6">
     <form method='POST' action ='./FrmMostrar_Estudiante.php'>
      <div class="row">
        <input type="hidden" name = "operacion" value="create-developer">
        <div class="col">
         <input type="text" name = "identificacion" class="form-control" placeholder="identificacion" value ='427776999'>
          </div>
          <div class="col">
          <input type="text" name = "nombre" class="form-control" placeholder="nombre" value ='Juan Jose'>
        </div>
      </div>
      <div class="row mt-4">
          <div class="col">
          <input type="text" name = "fechanacimiento" class="form-control" placeholder="fechanacimiento" value ='04/12/88'>
          </div>
          <div class="col">
          <input type="text" name = "valor" class="form-control" placeholder="Frond end or back end" value ='100000'>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <input type="submit" class="btn-dark btn-sm btn-block"/>
        </div>
          
      </div>
     </form>
    </div>
    </div>
</div>

</body>
</html>
