<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Contactanos!";
    include("head.php");
    include("botonera.php")?>

  </head>
  <body>
<body>
<div>

  <nav>
  </nav>

<div class="container bg-light">

  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>

  <main class="main p-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3">


    <h2  >Contactanos!</h2>

    <h3>Dejanos tus datos y en breve nos comunicaremos con vos!</h3>

    <form action="contacto.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $_POST? $_POST["nombre"] : ''; ?>" required> <br>
            <label for="email">Correo Electronico:</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $_POST? $_POST["email"] : ''; ?>" required> <br>
            <label for="radio"> <?= "Sos jugador de " . $nombreDelJueguito . "?" ?></label>
            <div class="">
              <p class="text-center">Si </p><input type="radio" id="jugador" name="jugador" class="form-control button" value="si" <?php if ($_POST && $_POST["jugador"] == "si") { echo 'checked';} ?>>
              <p class="text-center">No </p> <input type="radio" id="jugador" name="jugador" class="form-control button" value="no" <?php if ($_POST && $_POST["jugador"] == "no") { echo 'checked';} ?>> <br>
            </div>
            <label for="textarea" name="consulta"> Escribinos Aqui tu consulta</label><br>
            <textarea name="consulta" id="consulta" class="form-control" cols="30" rows="10" required>
              <?=$_POST? $_POST["consulta"]: ''; ?>
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
        if (!isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["consulta"]) ) {
        echo " <br>Por favor completa los datos que solicita el formulario";
        }
    }



?>



      </main>

    <footer class="footer">
    <?php include 'footer.php'; ?>
    </footer>

    <div class="bg-fondito pt-5 pb-5 ">

    </div>

  </div>
</body>
</html>
