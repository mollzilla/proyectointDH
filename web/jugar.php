
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/jugar.css">

<!--Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One|Work+Sans:900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--End of Queria los de Ionicon pero traje todos por las dudas de que quiera usarlos en algun momento -->

    <title>A jugar!</title>
  </head>

  <body>
    <div class="container bg-light text-center">

    <nav>
      <?php $seccion = "home";
      include "header.php"; /* para incluir la botonera de navegacion*/
      ?>
    </nav>

    <div class="bg-tarjetita pt-5 pb-5">
    </div>

<main>


  <h1 class= "text-center pt-3 pb-3 m-0 titulo-jueguito text-wrap">A JUGAR!</h1>

  <div class="palabra-a-adivinar p-5">
    <h2>aca va la palabra secreta!!!</h2>
    <h2>_ _ _ _</h2>
  </div>

  <form class="" action="jugar.php" method="post">
    <label for="palabra">Tu Propuesta</label><br>
    <input type="text" id="palabra" name="palabra" value=""><br><br>

    <?php

      foreach(range('a','z') as $v){  ?>
        <?php //necesito de alguna manera generar persistencia, pero no se como hacerlo con el bucle for. aca va un intento
        //if (isset($_POST)) { //si se mando algo... ?>
            <!-- <input type="checkbox" id="letra" name="<?=$_POST["$v"]?>" value="<?=$_POST["$v"] // la letra que fue enviada va a estar checkeada o sea...?>" checked>
            <?php //} fin del if. else { ?>
        -->
        <input type="checkbox" class="botoncito-check d-none"  id="<?=$v?>" name="letra[]" value="<?=$v?>">
        <label for="<?=$v?>" class="text-uppercase botoncito-letra"><?=$v?></label>
         <?PHP
      } if (isset($_POST)) {
        var_dump($_POST["letra"]);
      } ?>



        <?php // }?>



    <br><label for="enviar"></label>
    <input type="submit" id="probar" name="probar" value="Probar!">
  </form>









    <div class="footer">

  <nav>
    <?php include 'footer.php'; ?>
  </nav>

  </div>

</main>
</div>

</body>

</html>
