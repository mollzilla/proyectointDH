
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

<div class="container bg-light">

  <div class="bg-admin pt-5 pb-5">
  </div>

  <main class="main p-2 row">
    <div class="titulos text-center pt-4 col-6 offset-3">
      <h2 class="titulo ">Panel de Administrador</h2>
      <h3 class="titulo">Palabras</h3>
    </div>

    <div class="col-12 text-center mb-4">
      <br>
      <button type="button" class="boton-agregar mr-3 my-2  btn btn-primary" name="agregar"><a href="nueva-palabra.php" class="text-light">Nueva Palabra</a>  </button>
    </div>

<?php

// proyecto de traer las palabras del json
$palabrasEnJson = file_get_contents("palabras.json"); //me traigo las palabras guardadas
$palabrasDecodeadas = json_decode($palabrasEnJson); //las decodeo  ?>

        <div class="col-12 col-lg-10 offset-lg-1">

          <table class="tabla table table-striped">
            <tr>
            <th>Palabras</th><th>Categoria</th><th>Acciones</th>
            </tr>
              <?php foreach ($palabrasDecodeadas as $arrayPalabra) { //recorro el array
              foreach ($arrayPalabra as $categoria => $nombre) { ?>
            <tr>
              <td><?=$nombre?></td><td><?=$categoria?></td>
                <td><button type="button" class="mr-3 my-2 btn btn-primary" name="modificar">Modificar</button><button type="button" class="btn btn-danger my-2" name="quitar">Quitar</button></td>
            </tr>
              <?php } } ?>
          </table>

        </div>

      </main>

      <div class="admin-footer p-5 mt-5" >
      </div>

    </div>
  </body>
</html>
