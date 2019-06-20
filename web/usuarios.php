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
  <?php   include "header.php"; /* para incluir la botonera de navegacion*/?>
    <div class="main">
        <div class="container bg-light pt5">
        <div class="bg-tarjetita pt-5 pb-5">
    </div>

  <h1 class="text-center font-weight-bold">Mi Perfil</h1>
  <div class="contenedor-imagen">
    <img src=".\img\faces\face1.jpg" class="img-fluid rounded-circle rounded-sm my-3" alt="">
    <ul class="list-group">
  <li class="list-group-item my-2">Bienvenido Nombre!!!</li>
  <li class="list-group-item my-2">E-mail</li>
  <li class="list-group-item my-2">Estado</li> <!--Acá será editable para que pueda escribir un estado-->
</ul>
  </div>
<ul class="list-group">
  <h3 class="text-center font-weight-bold">Amigos</h3>
  <img src=".\img\faces\face2.jpg" class="img-fluid rounded-circle my-3" alt="">
<li class="list-group-item my-2"></li>
<li class="list-group-item my-2"></li>
<li class="list-group-item my-2"></li>
</ul>
<h3 class="text-center font-weight-bold">Ranking</h3>
<ul class="list-group">
<li class="list-group-item my-2"></li>
</ul>
<div class="text-center">
  <button type="button" class="btn btn-primary mt-2 mb-2">
    Agregar pregunta
  </button>
</div>
<div class="text-center">
  <button type="button" class="btn btn-primary mt-2 mb-2">
    Modificar mi contraseña   <!-- tiene que linkear a cambiar contraseña -->
  </button>
</div>





<?php include 'footer.php'; ?>
    </div>
  </body>
</html>