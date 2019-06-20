
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
    <link rel="stylesheet" href="./css/main.css">
    <title>Hello, world!</title>
  </head>
  <body>
<body>
<div>

  <?php
  $seccion = "Contacto";

   include "./header.php"; /* para incluir la botonera de navegacion*/

  ?>
<div class="container bg-light">

  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>

  <div class="main p-4">

<h2 class="text-info">Modifica tu Contraseña</h2>
  <div class="form-group">
    <form class="" action="password.php" method="post">
      <label for="email" class='text-dark'>E-mail:</label>
      <input type="text" name="email" class="form-control" value="Lorem@impsum.com" readonly>
      <br>
      <label for="password" class='text-dark'>Contraseña:</label>
      <input type="password" class="form-control" name="password">
      <br>
      <label for="confirmar" class='text-dark'>Confirmar Contraseña:</label>
      <input type="password" class="form-control" name="confirmar">
      <br>
      <input type="submit" name="enviar" class="btn btn-primary" value="Cambiar contraseña">
    </form>

    <?php include 'footer.php'; ?>
    </div>

    </div>
    </body>
    </html>
