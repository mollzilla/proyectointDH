
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
    <form class="" action="thankyoupass.php" method="post">
      <label for="email" class='text-dark'>Ingresa tu E-mail:</label>
      <input type="text" name="email" class="form-control" value="gomili@hotmail.com" readonly>
      <br>
      <input type="submit" name="enviar" class="btn btn-primary" value="Enviar nueva contraseña">
    </form>

    <?php if (isset($_POST["enviar"])) {
      //desde aca empieza generar la nueva contrasenia
      $uppr_case="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $lower_case="abcdefghijklmnopqrstuvwxyz";
      $numbers="0123456789";
      $special_chars="@#$%&*";

      $generated_uppr_case=substr(str_shuffle($uppr_case),0,2);

      $generated_lower_case=substr(str_shuffle($lower_case),0,2);

      $generated_numbers=substr(str_shuffle($numbers),0,2);

      $generated_special_chars=substr(str_shuffle($special_chars),0,2);

      $mixed="$generated_uppr_case$generated_lower_case$generated_numbers$generated_special_chars";

      $nuevaContrasenia=substr(str_shuffle($mixed),0,8);

    //termina generacion de nueva contrasenia
    //desde aca empieza el mail
    $recipient = "";
    $subject= "Tu contraseña provisoria de El Jueguito";
    $message="<h2>Tu nueva Contraseña Provisoria de El Jueguito</h2>
              <p>Hola! Estas recibiendo este mail porque solicitaste una contraseña provisoria de El Jueguito</p>
              <p>Tu nueva contraseña es $nuevaContrasenia</p>";
    $headers = "content-type:text/html\r\n";
    $headers.="from=El Jueguito <eljueguito@eljueguito.com>";



    $datosCodificados=file_get_contents("archivo.txt"); //traigo los datos
    $datosDecodificados=json_decode($datosCodificados); //los decodifico
    foreach ($datosDecodificados as $usuario) { //recorro el array con un for
      foreach ($usuario as $key => $value) {
        if ($key == "email" && $value == $_POST["email"]) {
          //cuando encuentro el que busco con el mail, envio un mail
          $recipient = $_POST["email"];

        }
      }

                mail($recipient, $subject, $message, $headers);
    }




    //que ese mail contenga un link a un reset pass o una contrasenia provisoria
    // echo "Te enviamos un mail con una contraseña provisoria";
    } //fin del if POST?>
      </div>
    </div>

    <footer>
      <?php include 'footer.php'; ?>
        <div class="bg-fondito pt-5 pb-5 ">
        </div>



    </div>
    </body>
    </html>
