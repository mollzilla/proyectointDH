<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Gracias Por Registrarte";
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


<h2 class="text-info">Gracias Por Registrarte!</h2>
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

<br><br> <h4 class="text-center text-info">Tu usuario ha sido generado con éxito</h4>
</div>
<div class="col-12 text-center mb-4">
  <br>
  <button type="button" class="mr-3 my-2  btn btn-primary" name="agregar"><a href="login.php" class="text-light">Click Aquí para inciar sesión</a>  </button>
</div>

    <footer>
      <?php include 'footer.php'; ?>
        <div class="bg-fondito pt-5 pb-5 ">
        </div>



    </div>
    </body>
    </html>
