<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/login.css">

    <title>Inicia Sesion</title>
  </head>
  <body>

<nav>
  <?php
  $seccion = "Login";
  include "./header.php"; /* para incluir la botonera de navegacion*/
  ?>
</nav>

<div class="container bg-color-light">
  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>
<main class="main p-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3">

<h2 class="pt-4 pb-4"class="titulo_login">Ingresá tus datos</h2>
  <form class="form-login" action="login.php" method="post">
    <label for="">email</label><br>
    <input class="form-control"type="email" name="email" value=""required><br>
    <label class="text-dark" for="">password</label><br>
    <input class="form-control" type="password" name="password" value=""required><br>
    <input class="btn btn-primary mt-2 mb-2" type="submit" name="" value="enviar"><br>
  </form>
<h3>Olvidaste tu contraseña?</h3>
<a href="./cambiarpassword.php">hacé click acá</a>

  </main>

<footer>
  <?php

  include "./footer.php";
  ?>

</footer>
<div class="bg-fondito pt-5 pb-5 ">
</div>
</div>






</html>

<?php
if($_POST){
$email = $_POST["email"] ;
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

//traigo los datos del usuario, de un archivo que me pasó Mili
$datoslogin = file_get_contents("archivo.txt");
//decodifico los datos traídos a través de json.
$logindecod = json_decode($datoslogin, true);
//una vez convertidos los datos en un array, lo recorro buscando las posiciones üsuario y contraseña
foreach ($logindecod as $usuario) {
  $emailcorrecto = false;
  $passwordcorrecto = false;
    foreach ($usuario as $datos => $valor){
       if ($datos=="email" && $_POST["email"]==$valor) {
         $emailcorrecto = true;
       }
       if($datos == "password"){
         echo $valor;
         echo "<br>";
         echo "password: ". $password;
         echo "<br>";
         echo $_POST["password"];
       }
       if ($datos == "password" && password_hash($_POST["password"], PASSWORD_DEFAULT) ==$valor){
         $passwordcorrecto = true;
         echo "password correcto";
       }

       }//fin del foreach anidado
       if($emailcorrecto && $passwordcorrecto )
       echo "adelante";
   }
   echo "usuario no existe";//fin del foreach ppal
}// fin if post, valido acá usuario y contraseña porque pertenecen al mismo usuario.



 ?>
