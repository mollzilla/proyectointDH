
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Contactanos</title>
  </head>
  <body>
<body>
<div>

  <?php
  $seccion = "Contacto";

   include "./header.php"; /* para incluir la botonera de navegacion*/

  ?>
<div class="container bg-light">

  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>

  <div class="main p-4">


    <h2  >Contactanos!</h2>

    <h3>Dejanos tus datos y en breve nos comunicaremos con vos!</h3>

    <form action="contacto.php" method="POST">

        Nombre: <input type="text" name="nombre" class="form-control" value="<?= $_POST? $_POST["nombre"] : ''; ?>"> <br>
        Correo Electronico: <input type="email" name="email" class="form-control" value="<?= $_POST? $_POST["email"] : ''; ?>"> <br>
            <label for="radio" value=""> <?= "Sos jugador de " . $nombreDelJueguito . "?" ?></label>
            <div class="">
              <p class="text-center">Si </p><input type="radio" name="jugador" class="form-control button" value="si" <?php if ($_POST && $_POST["jugador"] == "si") { echo 'checked';} ?>>
              <p class="text-center">No </p> <input type="radio" name="jugador" class="form-control button" value="no" <?php if ($_POST && $_POST["jugador"] == "no") { echo 'checked';} ?>> <br>
            </div>
            <label for="textarea" name="consulta"> Escribinos Aqui tu consulta</label><br>
            <textarea name="consulta" id="consulta" class="form-control" cols="30" rows="10" >
              <?=$_POST? $_POST["consulta"]: '';

           ?>
            </textarea>
            <br>
            <input type="submit" name="enviar" class="form-control btn-primary" value="Enviar">

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
                    <li class="text-danger"><?= $error?></li>
        <?php endforeach; ?>
                  </ul>
        <?php
        } else {
            echo "Gracias! En Breve nos comunicaremos con vos";
        }
    }
        else { ?>
        <p class="text-center text-danger">Por favor completa los datos que solicita el formulario</p>
        <?php }


?>
</div>
<?php include 'footer.php'; ?>
</div>

</div>
</body>
</html>
