<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <link rel="stylesheet" href="usuario.css">
    <img src="./imagen usuario/imagen perfil.png" alt="">
  </head>
  <body>
    <main class="container bg-light">
      <? include "header.php" ?>;
    </main>
    <form action="usuarios.php" method="post">
    <div class="">
      <br>
     <label for="nombre"> Usuario </label>
     <input type="text" name="nombre">
    </div>
    <br>
    <div class="">
    <label for="email">E-mail:</label>
    <input type="email" name="email" >
    </div>
    <br>
    <div class="">
    <label for="id">ID</label>
    <input type="id" name="id">
    </div>
    <br>
    <div class="">
    <label for="rankig">Ranking</label>
    <input type="ranking" name="ranking">
    </div>
    <br>
    <div class="modificar">
    <input type="reset"  value="Mofidicar mi perfil">
    </div>
    <br>
    <main>
      <footer>
        <?php include 'footer.php'; ?>
      </footer>
    </main>

  </body>
</html>
