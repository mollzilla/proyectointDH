<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container bg-light">


<?php

// Leer la base de usuario de usuarios.json
$datosEnJson = file_get_contents("./archivo.txt");
// Transformar el contenido del archivo de JSON a un Array
$datosDecodificados = json_decode($datosEnJson, true);

/*Recorrer el array de usuarios...
Recordar que $datosDecodificados me trae un array de arrays entonces para
Recorrerlo correctamente debo anidar 2 foreach */

foreach ($datosDecodificados as $usuario) {
    ?> <ul >
      <?php
//Por cada usuario preguntar si el email del mismo equivale al valor de $email

    if ($usuario["email"] === $_GET["email"] ){
      $nombre = $usuario["nombre"];
      echo "<h3 class='d-block p-2 bg-dark text-light'>Bienvenido $nombre</h3>";

      foreach ($usuario as $dato => $valor) {
        if($dato === "password"){
          echo "<li><a href='./password.php' >Click Aqui para modificar tu contraseña</a></li>";
        }else{
          echo "<li class='text-secondary'>Tu $dato es $valor</li>";
        }
      }
}
    ?>
       </ul>
<?php

}

 include 'footer.php'; ?>

<!--
x get q el usuario ingrese su Nombre x include ener la informaciónx jason decodificar
buscaro los datos de cada array
Crear un archivo ​perfil.php​ que manteniendo la estetica del sitio muestre
la información del usuario según un
 parámetro dado por GET. Por ejemplo perfil.php?email=dario@digitalhouse.com​
debería mostrar la información del
usuario con el email en el queryString. En caso de haberle agregado ​id​ al usuario,
utilizar este como parámetro de búsqueda.  -->
</div>
  </body>
</html>
