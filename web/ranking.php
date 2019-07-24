<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Ranking";
    include("head.php");
    include("botonera.php")?>

  </head>

  <body>
    <div class="container bg-light">

    <nav>

    </nav>

    <div class="bg-tarjetita pt-5 pb-5">
    </div>

<main>


    <h1 class= "text-center pt-3 pb-3 m-0 titulo-jueguito text-wrap">RANKING DE JUGADORES</h1>

  <?php
/*un poco de php para preparar la pagina para trabajar con base de datos:*/

$jugadoresRankeados = [
  ["ranking" => 1, "nombre" => "Juan Lorem", "avatar" => "face1.jpg", "medallas" => ["badge1.png", "badge2.png", "badge3.png", "badge4.png", "badge5.png"]],
  ["ranking" => 2, "nombre" => "Pedro Ipsum", "avatar" => "face2.jpg", "medallas" => ["badge1.png", "badge2.png", "badge3.png", "badge5.png"]],
  ["ranking" => 3, "nombre" => "Roberto Dolor", "avatar" => "face3.jpg", "medallas" => ["badge1.png", "badge4.png", "badge5.png"]],
  ["ranking" => 4, "nombre" => "Chichina Sit", "avatar" => "face4.jpg", "medallas" => ["badge3.png", "badge4.png"]],
  ["ranking" => 5, "nombre" => "Pepito Amet", "avatar" => "face5.jpg", "medallas" => ["badge4.png"]]

];

?>

<div class="row">
<?php foreach ($jugadoresRankeados as $jugador): ?>
  <div class="col-12 col-md-6 col-lg-4 col-xl-3">

    <div class="player-container text-center pb-5 ">
      <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->

        <img src="img/faces/<?= $jugador["avatar"] ?>" class="rounded-circle mt-5 avatar-thumbnail" alt="">
        <div class="nro-ranking">
          <h2 class="nro-ranking similh1"  $jugador["ranking"] ?></h2>
        </div>

      </div>

      <div class="medallitas m-1 text-center">
        <?php foreach ($jugador["medallas"] as $medalla) { ?>
          <img src="img/badges/<?= $medalla ?>" class="medallita" alt="">
        <?php } ?>

      </div>

      <h2 class="player-name text-center"><?=$jugador["nombre"] ?></h2>

    </div>

  </div>

<?php endforeach; ?>
</div>
<div class="bg-fondito pt-5 pb-5 ">
</div>

</div>
  <div class="footer">


  <nav>
    <?php include 'footer.php'; ?>

  </nav>

  </div>

</main>


</div>

</body>

</html>
