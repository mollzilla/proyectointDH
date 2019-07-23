
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
    <link rel="stylesheet" href="./css/home2.css">
    <link rel="stylesheet" href="./css/ranking.css">


<!--Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--End of Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->

    <title>Bienvenido!</title>
  </head>
  <body>
<body>
<div class="container bg-light">

<nav>
  <?php
    $seccion = "home";
    include_once "header.php"; /* para incluir la botonera de navegacion*/
  ?>
  <div class="bg-tarjetita pt-5 pb-5">
  </div>

</nav>

<main class="">
    <h1 class= "text-center py-3 m-0 titulo-jueguito text-wrap"><?= $nombreDelJueguito ?></h1>

<div class="calesita col-lg-6">
    <div  class="carousel slide" data-ride="carousel" data-interval="3500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/tipitos.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="text-dark">Cosa que hace el Jueguito</h5>
            <p class="text-dark ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/social-people.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/pixelated-fruits.jpg" alt="Third slide">
        </div>
      </div>
    </div>
</div>

<div class="bienvenido-container text-center py-4">
  <h2>Bienvenido a <?= $nombreDelJueguito ?>!!! Un juego que Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
</div>

<div class="d-inline-flex justify-content-between">

<div class="container col-lg-3 d-inline-flex flex-row" style="margin-top:30px;">
  <div class="row">

    <div class="">
      <div class="hovereffect">
        <img class="img-responsive" src="./img/press-start.jpg" alt="">
        <div class="overlay">
          <h2 class="a-jugar">A JUGAR</h2>
				  <p><a href="#">Click Aqui Para empezar!</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="container col-lg-3 d-inline-flex flex-row" style="margin-top:30px;">
      <div class="row">

        <div class="">
          <div class="hovereffect">
            <img class="img-responsive" src="./img/press-start.jpg" alt="">
            <div class="overlay">
              <h2>A JUGAR!!!</h2>
    				  <p><a href="#">Click Aqui!</a></p>
            </div>
          </div>
        </div>
      </div>
  </div>

        <div class="container col-lg-3 d-inline-flex flex-row" style="margin-top:30px;">
          <div class="row">

            <div class="d-flex">
              <div class="hovereffect">
                <img class="img-responsive" src="./img/press-start.jpg" alt="">
                <div class="overlay">
                  <h2 class="align-items-end">A JUGAR!!!</h2>
        				  <p><a href="#">Click Aqui!</a></p>
                </div>
              </div>
            </div>
      </div>
  </div>

</div>


<h1 class="text-center pt-4">SALON DE LA FAMA</h1>
  <div class="ranking-container row">
    <div class="calesita col-lg-6">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-interval="3000" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-row">
              <div class="player-container text-center pb-5 ">
                <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->
                  <img src="img/faces/face1.jpg" class="rounded-circle mt-5 avatar-thumbnail" alt="">
                  <div class="nro-ranking">
                    <h1 class="nro-ranking">1</h1>
                  </div>
                </div>

                <div class="medallitas m-1 text-center">
                  <img src="img/badges/badge1.png" class="medallita" alt="">
                </div>

                <h2 class="player-name text-center">Pepe Honguito</h2>
              </div>

              <div class="player-container text-center pb-5 ">
                <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->
                  <img src="img/faces/face1.jpg" class="rounded-circle mt-5 avatar-thumbnail" alt="">
                  <div class="nro-ranking">
                    <h1 class="nro-ranking">2</h1>
                  </div>
                </div>

                <div class="medallitas m-1 text-center">
                  <img src="img/badges/badge1.png" class="medallita" alt="">
                </div>

                <h2 class="player-name text-center">Pepe Honguito</h2>
              </div>
            </div>
          </div>


            <div class="carousel-item">
              <div class="d-flex flex-row">
              <div class="player-container text-center pb-5 ">
                <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->
                  <img src="img/faces/face1.jpg" class="rounded-circle mt-5 avatar-thumbnail" alt="">
                  <div class="nro-ranking">
                    <h1 class="nro-ranking">3</h1>
                  </div>
                </div>

                <div class="medallitas m-1 text-center">
                  <img src="img/badges/badge1.png" class="medallita" alt="">
                </div>

                <h2 class="player-name text-center">Pepe Honguito</h2>
              </div>

              <div class="player-container text-center pb-5 ">
                <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->
                  <img src="img/faces/face1.jpg" class="rounded-circle mt-5 avatar-thumbnail" alt="">
                  <div class="nro-ranking">
                    <h1 class="nro-ranking">4</h1>
                  </div>
                </div>

                <div class="medallitas m-1 text-center">
                  <img src="img/badges/badge1.png" class="medallita" alt="">
                </div>

                <h2 class="player-name text-center">Pepe Honguito</h2>
              </div>
            </div>
          </div>

            <div class="carousel-item">
              <div class="d-flex flex-row">
              <div class="player-container text-center pb-5 ">
                <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->
                  <img src="img/faces/face1.jpg" class="rounded-circle mt-5 avatar-thumbnail" alt="">
                  <div class="nro-ranking">
                    <h1 class="nro-ranking">5</h1>
                  </div>
                </div>

                <div class="medallitas m-1 text-center">
                  <img src="img/badges/badge1.png" class="medallita" alt="">
                </div>

                <h2 class="player-name text-center">Pepe Honguito</h2>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>



<div class="row">

    <h3 class="text-center pt-4 p-2 font-weight-bold">Seguinos en las Redes Sociales!</h3>
  <div class="footer1 col-12 d-flex justify-content-center p-5">
      <a href="#" class="iconito p-2 text-wrap"><ion-icon class="text-gray iconito text-wrap" name="logo-facebook"></ion-icon></a>
      <a href="#" class="iconito p-2 text-wrap"><ion-icon class="text-gray iconito text-wrap" name="logo-googleplus"></ion-icon></a>
      <a href="#" class="iconito p-2 text-wrap"><ion-icon class="text-gray iconito text-wrap" name="logo-twitter"></ion-icon></a>
      <a href="#" class="iconito p-2 text-wrap"><ion-icon class="text-gray iconito text-wrap" name="logo-linkedin"></ion-icon></a>
      <a href="#" class="iconito p-2 text-wrap"><ion-icon class="text-gray iconito text-wrap" name="logo-dribbble"></ion-icon></a>

  </div>

</div>

</main>

<footer class="">
<?php include 'footer.php'; ?>
</footer>
<div class="bg-fondito pt-5 pb-5">
</div>

</div>

</div>

</html>
