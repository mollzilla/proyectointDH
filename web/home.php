
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">

<!--Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--End of Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->

    <title>Hello, world!</title>
  </head>
  <body>
<body>
<div class="container bg-light">

  <?php
    $seccion = "home";

    include "header.php"; /* para incluir la botonera de navegacion*/
  ?>


<div class="topper">

  <div class="titulo-jueguito">
    <h1 class="d-flex justify-content-center p-5"><?= $nombreDelJueguito ?></h1>
  </div>

</div>

<?php for ($i=0; $i < 2; $i++) :
  ?>
    <div class="row">

      <div class="imagen col-12 col-lg-6 p-5 ">
        <img src=".\img\social-people.jpg" class="img-fluid" alt="">
      </div>

      <div class="texto col-12 col-lg-6 p-5 ">
        <h3>Cosa que hace <?= $nombreDelJueguito ?></h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
      </div>

      <div class="texto col-12 col-lg-6 p-5 ">
        <h3>Cosa que hace <?= $nombreDelJueguito ?></h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
      </div>

      <div class="imagen col-12 col-lg-6 p-5 ">
        <img src=".\img\pixelated-fruits.jpg" class="img-fluid" alt="">
      </div>

</div>
<?php endfor; ?>

<div class="row">

    <h3 class="text-black pt-4 pb-4 font-weight-bold">Seguinos en las Redes Sociales!</h3>
  <div class="footer1 col-12 d-flex justify-content-center p-5">
      <ion-icon class="text-gray iconito rounded-circle p-3" name="logo-facebook"></ion-icon>
      <ion-icon class="text-gray iconito rounded-circle p-3" name="logo-googleplus"></ion-icon>
      <ion-icon class="text-gray iconito rounded-circle p-3" name="logo-twitter"></ion-icon>
      <ion-icon class="text-gray iconito rounded-circle p-3" name="logo-linkedin"></ion-icon>
      <ion-icon class="text-gray iconito rounded-circle p-3" name="logo-dribbble"></ion-icon>

  </div>

</div>

  <div class="fondito container-fluid text-center">


    <h6 class="pt-5 pb-5 text-black font-weight-bold">Copyright &#169 MMG Web Solutions </h6>

  </div>




</div>

</html>
