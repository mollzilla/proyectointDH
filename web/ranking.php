
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

    <title>Ranking!</title>
  </head>

  <body>
    <div class="container bg-light">
      <?php $seccion = "home";

      include "header.php"; /* para incluir la botonera de navegacion*/

      ?>

    <div class="bg-tarjetita pt-5 pb-5">
    </div>

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

  foreach ($jugadoresRankeados as $jugador) {
  ?>

    <div class="player-container text-center pb-5">
      <div class="profile-container text-center"> <!--la voy a poner dentro de un div para que tome el 100% del div y no crezca tanto -->

        <img src="img/faces/<?= $jugador["avatar"] ?>" class="rounded-circle mt-5 avatar-thumbnail" alt="">
        <div class="nro-ranking">
          <h1 class="nro-ranking"><?=$jugador["ranking"] ?></h1>
        </div>

      </div>

      <div class="medallitas m-1 text-center">
        <?php foreach ($jugador["medallas"] as $medalla) { ?>
          <img src="img/badges/<?= $medalla ?>" class="medallita" alt="">
        <?php } ?>

      </div>

      <h2 class="player-name text-center"><?=$jugador["nombre"] ?></h2>

    </div>
    <?php  } ?>




</div>
  <div class="footer">


    <?php include 'footer.php'; ?>

  </div>
</div>

</body>

</html>
