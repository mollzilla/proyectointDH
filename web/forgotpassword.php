
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
    <title>Olvidaste tu password</title>
  </head>
  <body>
<body>
<div>

<nav>
  <?php
  $seccion = "Contacto";
  include "./header.php"; /* para incluir la botonera de navegacion*/
  ?>
</nav>

<div class="container bg-light">

  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>

  <div class="main p-4">

<div class="row">


<h2 class="text-info">Olvido de  Contraseña</h2>
  <div class="form-group col-md-8 offset-md-2 col-lg-6 offset-lg-3">
    <form class="" action="cambiarpassword.php" method="post">
      <label for="email" class='text-dark'>Ingresa tu E-mail:</label>
      <input type="text" name="email" class="form-control" value="Lorem@impsum.com" readonly>
      <br>
      <input type="submit" name="enviar" class="btn btn-primary" value="Cambiar contraseña">
    </form>

    <?php if ($_POST) {

    //traigo los datos
    //los decodifico
    //recorro el array con un for
    //cuando encuentro el que busco con el mail, envio un mail
    //que ese mail contenga un link a un reset pass o una contrasenia provisoria
    // echo "Te enviamos un mail con una contraseña provisoria";
    } ?>
      </div>
    </div>

    <footer>
      <?php include 'footer.php'; ?>
        <div class="bg-fondito pt-5 pb-5 ">
        </div>



    </div>
    </body>
    </html>
