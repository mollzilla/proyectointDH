
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Panel de Administrador - Ingresar Nueva Palabra</title>
  </head>
  <body>
<body>


<div class="container bg-light">

  <div class="bg-admin pt-5 pb-5">
  </div>

  <main class="main p-2 row">
    <div class="titulos text-center pt-4">
      <h2>Panel de Administrador</h2>
      <h3>Palabras</h3>
    </div>

    <div class="col-12 text-center mb-4">
    <br>
    <button type="button" class="mr-3 my-2  btn btn-primary" name="agregar"><a href="./nueva-palabra.php" class="text-light">Agregar Palabra</a></button>
    </div>

<?php

$palabras = [
"pino" => "Naturaleza",
"cima" => "Naturaleza",
"arco" => "Objetos",
"vena" => "Humanidad",
"loca" => "Humanidad",
"sino" => "Humanidad",
"copa" => "Objetos",
"mago" => "Humanidad",
"urna" => "Objetos"
]



 ?>

<div class="col-12 col-lg-10 offset-lg-1">


<table class="table table-striped">
  <tr>
  <th>Palabras</th><th>Categoria</th><th>Acciones</th>
  </tr>
<?php foreach ($palabras as $nombre => $categoria) : ?>
  <tr>
    <td><?=$nombre?></td><td><?=$categoria?></td>
      <td><button type="button" class="mr-3 my-2 btn btn-primary" name="modificar">Modificar</button><button type="button" class="btn btn-danger my-2" name="quitar">Quitar</button></td>
  </tr>
<?php endforeach; ?>
</table>

</div>


      </main>


            <div class="admin-footer p-5 mt-5" >

            </div>

    </div>
  </body>
</html>
