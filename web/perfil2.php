
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
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--End of Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->

    <title>Hello, world!</title>
  </head>

<body>
<div class="container bg-light">

  <?php
    $seccion = "home";

    include "header.php"; /* para incluir la botonera de navegacion*/
  ?>


<div class="topper mt-4">

  <div class="titulo-jueguito mb-5">
    <h1 class="d-flex justify-content-center p-5 titulo-jueguito"><?= Ranking de Jugadores de $nombreDelJueguito ?></h1>

  </div>


<?php
$jugadoresEnJson = file_get_contents("archivo.txt");
$jugadores = json_decode($jugadoresEnJson);


foreach ($jugadores as $jugador) {
  foreach ($jugador as $dato => $valor) {
    //agarrar el valor puntaje y guardarlo en una array de puntajes
    // ordenar los valores de esa array
    //encontrar una manera de que esos valores llamen al nombre y avatar de ese Jugador
    //
  }
}
?>
<ol>
  <!--<li> <a href= perfil.php?email= <?php /*  $jugador */ ?>></a> </li> Esta seria una propuesta de como quedaria completo -->
  <li> <a href="#">$nombreDelJugador</a> </li>
</ol>

</div>

</div>
</body>
