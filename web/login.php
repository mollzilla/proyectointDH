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
    <?php
  $seccion = "Contacto";

  include "./header.php"; /* para incluir la botonera de navegacion*/

  ?>
  <!-- acá copiar los includes de la página de contacto de Mili. -->
<div class="container bg-color-light">;
  <div class="bg-tarjetita pt-5 pb-5 ">

  </div>


<h2 class="pt-4 pb-4"class="titulo_login">Ingresá tus datos</h2>
  <form class="form-login" action="login.php" method="post">
    <label for="">email</label><br>
    <input class="form-control"type="email" name="email" value=""><br>
    <label class="text-dark" for="">password</label><br>
    <input class="form-control" type="password" name="password" value=""><br>
    <input class="btn btn-primary mt-2 mb-2" type="submit" name="" value="enviar"><br>


  </form>
  <?php
  $seccion = "Contacto";

  include "./footer.php";
  ?>

</div>
?>





</html>

<?php
if($_POST){
//traigo los datos del usuario, de un archivo que me pasó Mili
$datoslogin = file_get_contents("datosjson.json");
//decodifico los datos traídos a través de json.
$logindecod = json_decode($datoslogin, true);
//una vez convertidos los datos en un array, lo recorro buscando las posiciones üsuario y contraseña
foreach ($logindecod as $usuario) {
    foreach ($usuario as $datos => $valor){
       if ($datos=="email" && $_POST["email"]==$valor) {
         echo "el mail es correcto";
//si los datos guardaddos y los traídos del formularios son iguales
       }// cierra el if
     }//fin del foreach anidado
   }//fin del foreach ppal
}// fin if post



 ?>
