<?php

if($_POST){

  if(!isset($_SESSION))
    { session_start();
  }

$email = $_POST["email"] ;
$password = ($_POST["password"]);


//traigo los datos del usuario, de un archivo que me pasó Mili
$datoslogin = file_get_contents("archivo.txt");
//decodifico los datos traídos a través de json.
$logindecod = json_decode($datoslogin, true);
//una vez convertidos los datos en un array, lo recorro buscando las posiciones üsuario y contraseña
foreach ($logindecod as $usuario) {
  $emailcorrecto = false;
  $passwordcorrecto = false;
  $nombrecorrecto = "";
    foreach ($usuario as $datos => $valor){
       if ($datos=="email" && $_POST["email"]==$valor) {
         $emailcorrecto = true;
       }
       if ($datos=="nombre") {
         $nombrecorrecto = $valor;
       }

       if ($datos == "password" && password_verify($_POST["password"], $valor)) {
         $passwordcorrecto = true;
       }

       }//fin del foreach anidado
       if($emailcorrecto && $passwordcorrecto ) {
        $_SESSION["email"] = $_POST["email"];
        header("Location:home.php");

        } //fin del foreach email y pass correctos
   }
   //fin del foreach ppal
   if (isset($_POST) && (!$passwordcorrecto || !$emailcorrecto)) { ?>
     <h5 class='text-danger p-2 text-center'>El nombre de Usuario o passsword son incorrectos. Por favor intentalo nuevamente</h5>
   <?php } }// fin if post, valido acá usuario y contraseña porque pertenecen al mismo usuario.

 
$seccion = "Inicia Sesion";
include("head.php");
include("botonera.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


  </head>
  <body>

<nav>

</nav>

<div class="container bg-light">
  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>
<main class="main p-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3">

<h2 class="pt-4 pb-4"class="titulo_login">Logueate al Jueguito!</h2>
  <form class="form-login" action="login.php" method="post">
    <label for="">email</label><br>
    <input class="form-control"type="email" name="email" value="<?= $_POST? $_POST["email"] : '' ?>" required "<?php if(isset($_COOKIE["login_usuario"])) { echo $_COOKIE["login_usuario"]; } ?>"><br>
    <label class="text-dark" for="">password</label><br>
    <input class="form-control" type="password" name="password" value="<?php if(isset($_COOKIE["usuario_password"])) { echo $_COOKIE["usuario_password"]; } ?>"required><br>
    <input class="rbtn btn-primary mt-2 mb-2" type="submit" name="" value="enviar"><br>
    <label for="recordarme" class='text-dark'>Recordar mi usuario</label>
    <input type="checkbox" name="remember" id="remember" class="d-inline" value="<?php if(isset($_COOKIE["login_usuario"])) { ?>" checked
  <?php } ?>>

    </form>
<div class="">


<h3>Olvidaste tu contraseña?</h3>

<a href="./forgotpassword.php">hacé click acá</a>


  </main>


  <footer class="">
  <?php include 'footer.php'; ?>
  </footer>
  <div class="bg-fondito pt-5 pb-5">
  </div>

  </div>

  </div>
</div>
  </html>
