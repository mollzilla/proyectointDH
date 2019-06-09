<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php

$nombreDelJueguito = "El Jueguito";
global $nombreDelJueguito;

$botones = ["Home" => "",
 "Login" => "",
 "Registrarse" => "",
 "Mi Perfil" => "",
 "Preguntas Frecuentes" => "",
 "Contacto" => ""];

?>

<header>
    <nav>
        <ul>
         <?php foreach ($botones as $boton => $link) : ?>
         <li><a href="<?=$link?>"><?= $boton?></a></li>
         <?php endforeach;?>




        </ul>
    </nav>

</header>

</body>
</html>
