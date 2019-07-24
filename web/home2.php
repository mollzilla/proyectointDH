
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $seccion = "Home";

     include("head.php");
     include("header.php");?>
  </head>

<body>
<div class="container bg-light">

<nav>

  <div class="bg-tarjetita pt-5 pb-5">
  </div>

</nav>

<main class="">
    <h1 class= "text-center py-3 m-0 titulo-jueguito text-wrap"><?= $nombreDelJueguito ?></h1>

<div class="calesita col-lg-6">
    <div  class="carousel slide" data-ride="carousel" data-interval="3500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="" style="height:350px;">

          <img class="d-block w-100" src="./img/tipitos.jpg" alt="First slide">

          </div>
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <div class="" style="height:350px;">
          <img class="d-block w-100" src="./img/social-people.jpg" alt="Second slide">
        </div>
</div>
        <div class="carousel-item">
          <div class="" style="height:350px;">
          <img class="d-block w-100" src="./img/pixelated-fruits.jpg" alt="Third slide">
</div>
        </div>
      </div>
    </div>
</div>

<main>

    <h1 class= "text-center py-3 m-0 titulo-jueguito text-wrap">Bienvenidos!!!</h1>

<?php for ($i=0; $i < 2; $i++) :
?>
<div class="row">

  <div class="imagen col-12 col-lg-6 p-5 ">
    <img src=".\img\social-people.jpg" class="img-fluid" alt="">
  </div>

  <div class="texto col-12 col-lg-6 p-5">
    <h3 class="pb-2">Cosa que hace <?= $nombreDelJueguito ?></h3>
    <h4 class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
  </div>

  <div class="texto col-12 col-lg-6 p-5 ">
    <h3 class="pb-2">Cosa que hace <?= $nombreDelJueguito ?></h3>
    <h4 class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
  </div>

  <div class="imagen col-12 col-lg-6 p-5 ">
    <img src=".\img\pixelated-fruits.jpg" class="img-fluid" alt="">
  </div>


</div>

<?php endfor; ?>

<div class="bienvenido-container text-center py-4">
  <h2>Bienvenido a <?= $nombreDelJueguito ?>!!! Un juego que Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
</div>



<div class="container">
  <div class="row">

    <div class="col-12 col-md-6 col-lg-4">
      <div class="hovereffect">
        <img class="img-responsive" src="./img/press-start.jpg" alt="">
        <div class="overlay">
          <h2 class="">A JUGAR!!!</h2>
          <p><a href="#">Click Aqui!</a></p>
        </div>
      </div>
    </div>

<!-- <div class="col-12 col-md-6 col-lg-4"
    <div class="hovereffect">
        <img class="img-responsive" src="http://placehold.it/350x250" alt="">
            <div class="overlay">
                <h2>Effect 12</h2>
				<p>
					<a href="#">LINK HERE</a>
				</p>
            </div>
    </div>
</div> -->

    <div class="col-12 col-md-6 col-lg-4">
      <div class="hovereffect">
        <img class="img-responsive" src="./img/press-start.jpg" alt="">
        <div class="overlay">
          <h2 class="align-items-end">A JUGAR!!!</h2>
          <p><a href="#">Click Aqui!</a></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
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
