<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Tu perfil";
    include("head.php");
    include("botonera.php")?>

  </head>

<body>


    <div class="main">
        <div class="container bg-light pt5">
        <div class="bg-tarjetita pt-5 pb-5">
    </div>

  <h1 class="text-center font-weight-bold">Mi Perfil</h1>
  <div class="contenedor-imagen">
    <img src=".\img\faces\face1.jpg" class="imagen-usuario img-fluid rounded-circle rounded-sm my-3" alt="">
    <ul class="list-group">
  <li class="list-group-item my-2"><h5>Bienvenido JUAN LOREM!!!</h5></li>
  <li class="list-group-item my-2"><h5>E-mail</h5></li>
  <li class="list-group-item my-2"><h5>Estado</h5></li> <!--Acá será editable para que pueda escribir un estado-->
</ul>
  </div>
<ul class="list-group">
  <h3 class="text-center font-weight-bold">Amigos</h3>
  <img src=".\img\faces\face2.jpg" class="rounded-circle imagen-amigos my-3" alt="">
<li class="list-group-item my-2">PEDRO IPSUM</li>
  <img src=".\img\faces\face3.jpg" class="rounded-circle imagen-amigos my-3" alt="">
<li class="list-group-item my-2">ROBERTO DOLOR</li>
  <img src=".\img\faces\face4.jpg" class="rounded-circle imagen-amigos my-3" alt="">
<li class="list-group-item my-2">CHICHINA SIT</li>
</ul>
<br>
<h3 class="text-center font-weight-bold">Ranking</h3>
<ul class="list-group">
<li class="list-group-item my-2"><a href="./ranking.php">Conocer mi Lugar</a> </li>
</ul>
<div class="text-center">
  <button type="button" class="btn btn-primary mt-2 mb-2">
    Agregar pregunta
  </button>
</div>
<div class="text-center">
    <a href="./cambiarpassword.php" class="btn btn-primary mt-2 mb-2">Modificar mi contraseña</a>   <!-- tiene que linkear a cambiar contraseña -->
  </button>
</div>

<footer>
<?php include 'footer.php'; ?>
</footer>
<div class="bg-fondito pt-5 pb-5 ">
</div>

    </div>
  </body>
</html>
