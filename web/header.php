
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
    <title>Hello, world!</title>
  </head>
  <body>



<?php

$nombreDelJueguito = "El Jueguito";
$seccion = "";
global $nombreDelJueguito;
global $seccion;

$botones = ["Home" => "",
 "Login" => "",
 "Registrarse" => "",
 "Mi Perfil" => "",
 "Preguntas Frecuentes" => "",
 "Contacto" => ""];

?>

<header>
    <nav class="barrita-nav p-3">
        <ul class="nav nav-pills nav-fill">
         <?php foreach ($botones as $boton => $link) : ?>
         <li class="nav-item"><a class="btn btn-outline-info" href="<?=$link?>"><?= $boton?></a></li>
         <?php endforeach;?>




        </ul>
    </nav>

</header>

</body>
</html>
