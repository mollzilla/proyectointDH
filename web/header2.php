
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

$botones = ["Home" => "home.php",
 "Logout" => "home.php",
 "A jugar" => "jugar.php",
 "Mi Perfil" => "usuarios.php",
 "Preguntas Frecuentes" => "faq.php",
 "Contacto" => "contacto.php"];

?>

<header class="container bg-light pb-3">
  <div >

    <nav class="barrita-nav p-3 d-none d-md-block">
        <ul class="nav nav-pills nav-fill">
         <?php foreach ($botones as $boton => $link) : ?>
         <li class="nav-item"><a class="btn btn-outline-info mb-2" href="<?=$link?>"><?= $boton?></a></li>
         <?php endforeach;?>
        </ul>
    </nav>

    <nav class="p-3 d-block d-md-none list-group">
        <?php foreach ($botones as $boton => $link) : ?>
         <a class="list-group-item list-group-item-action text-uppercase bg-light text-center text-info" href="<?=$link?>"><?= $boton?></a>
         <?php endforeach;?>
        </ul>
    </nav>

</div>
</header>

</body>
</html>
