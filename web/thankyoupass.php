
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
    <?php

/* if(isset($_POST)){
    $to = $_POST['email']; // this is your Email address
    $from = "eymili@gmail.com"; // this is the sender's Email address
    $username = /*$_POST['usuario'] tengo que terminar de entender como funciona esto "Pepito";
    $subject = "Tu password provisorio";
    $headers = "El Jueguito Mailing Service";
    $message = "Hola! te escribimos porque solicitaste resetear tu password. Este password provisorio tendrá una validez de una hora:";
    mail($to,$subject,$message, $headers);
    */
    // You can also use header('Location: thank_you.php'); to redirect to another page.}

?>

</div>

<br><br> <p class="text-center text-info">Se envio un mail con tu password provisorio</p>
</div>

    <footer>
      <?php include 'footer.php'; ?>
        <div class="bg-fondito pt-5 pb-5 ">
        </div>



    </div>
    </body>
    </html>
