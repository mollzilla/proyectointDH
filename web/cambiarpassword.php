<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Modifica tu password!";
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


<h2 class="text-info">Modifica tu Contraseña</h2>
  <div class="form-group col-md-8 offset-md-2 col-lg-6 offset-lg-3">
    <form class="" action="cambiarpassword.php" method="post">
      <label for="email" class='text-dark'>E-mail:</label>
      <input type="text" name="email" class="form-control" value="tumail@tumail.com">
      <br>
      <label for="password" class='text-dark'>Contraseña Actual:</label>
      <input type="password" class="form-control" name="password" required>
      <br>
      <label for="password" class='text-dark'>Nueva Contraseña:</label>
      <input type="password" class="form-control" name="new-password" required>
      <br>
      <label for="confirmar" class='text-dark'>Confirmar Nueva Contraseña:</label>
      <input type="password" class="form-control" name="confirmar" required>
      <br>
      <input type="submit" name="enviar" class="btn btn-primary" value="Cambiar contraseña">
    </form>

    <?php if ($_POST) {

    //traigo los datos
    //los decodifico
    //recorro el array con un for
    //cuando encuentro el que busco con el mail, comparo contrasenia
    //si la contrasenia esta bien, reescribo la contrasenia
    //codifico los datos
    //los guardo en el archivo
    $datosCodificados=file_get_contents("archivo.txt"); //traigo los datos
    $datosDecodificados=json_decode($datosCodificados, true); //los decodifico

    $usuarioEncontrado = [];


    $emailcorrecto = false;
    $passwordcorrecto = false;
    $passwordsIguales=false;

for ($i=0; $i < count($datosDecodificados); $i++) {

  if($datosDecodificados[$i]["email"] == $_POST["email"]){
      echo ("encontre el usuario <br>");
        $emailcorrecto=true;


  if (password_verify($_POST["password"], $datosDecodificados[$i]["password"])) {
        $passwordcorrecto = true;
        echo "password bien <br>";
      }

  if ($_POST["new-password"] == $_POST["confirmar"]) {
        $passwordsIguales=true;
        echo "passwords iguales <br>";
      }

  if ($emailcorrecto && $passwordcorrecto && $passwordsIguales) {
    $datosDecodificados[$i]["password"] = password_hash($_POST["new-password"], PASSWORD_DEFAULT);
      echo "Gracias! tu contraseña fue modificada con exito";
  }
  $datosCodificados=json_encode($datosDecodificados);
  file_put_contents("archivo.txt", $datosCodificados);

    break; // que no siga ejecutando despues de que encontro el usuario correcto
    }

} // fin de ciclo for




       if (isset($_POST) && (!$passwordcorrecto || !$emailcorrecto)) { ?>
         <h5 class='text-danger p-2 text-center'>El nombre de Usuario o passsword son incorrectos. Por favor intentalo nuevamente</h5>
       <?php }

       if (isset($_POST) && ($_POST["new-password"] !== $_POST["confirmar"])) { ?>
         <h5 class='text-danger p-2 text-center'>Las nuevas contraseñas no coinciden. Por favor intentalo nuevamente</h5>

    <?php } }// fin if post    ?>



          </div>
    </div>

    <footer>
      <?php include 'footer.php'; ?>
        <div class="bg-fondito pt-5 pb-5 ">
        </div>



    </div>
    </body>
    </html>
