<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Cambio de Password";
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
