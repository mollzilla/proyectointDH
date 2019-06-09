
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <!-- /* include ""; para incluir la botonera de navegacion*/ -->

 <?php $nombreDelJueguito = "Jueguito"; ?>

    <h2>Contactanos!</h2>

    <h3>Dejanos tus datos y en breve nos comunicaremos con vos!</h3>

    <form action="contacto.php" method="POST">

        Nombre: <input type="text" name="nombre"> <br>
        Correo Electronico: <input type="email" name="email"> <br>
            <label for="radio">Sos Jugador de</label> <?= $nombreDelJueguito?>?:
            <input type="radio" name="jugador" id="si">
            <input type="radio" name="jugador" id="no"> <br>
            <label for="textarea">Escribinos Aqui tu consulta</label><br>
            <textarea name="consulta" id="consulta" cols="30" rows="10" placeholder="Escribi aca tu Consulta">
              </textarea>
            <br>
            <input type="submit" name="enviar" value="Enviar">


    </form>

<?php

    $errores = [];

    if ($_POST) {
        if (strlen($_POST["nombre"]) === 0 ) {
            $errores[] = "Por favor ingresa tu nombre";
        }

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $errores[] = "Por favor ingresa una direccion de correo valida";

        }

        if (count($errores) > 0) {
                ?><ul>
                <?php foreach ($errores as $error) : ?>
                    <li><?= $error?></li>
        <?php endforeach; ?>
                  </ul>
        <?php
        } else {
            echo "Gracias! En Breve nos comunicaremos con vos";
        }
    }
        else {
        echo "Por favor completa los datos que solicita el formulario";
        }


?>

</body>
</html>
