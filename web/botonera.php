<!DOCTYPE html>

  <head>
    <?php
    $nombreDelJueguito = "El Jueguito";
    $seccion = "";?>
    <title><?=$seccion?></title>
  </head>

  <body>
<?php

if (isset($_SESSION["email"])) {

  $botones = ["Home" => "home.php",
   "Logout" => "home.php?logout=1",
   "A jugar" => "jugar.php",
   "Mi Perfil" => "usuarios.php",
   "Preguntas Frecuentes" => "faq.php",
   "Contacto" => "contacto.php",
   "Ranking" => "ranking.php"];

} else {

  $botones = ["Home" => "home.php",
   "Login" => "login.php",
   "Registrarse" => "register.php",
   "Preguntas Frecuentes" => "faq.php",
   "Contacto" => "contacto.php",
   "Ranking" => "ranking.php"];
}



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
