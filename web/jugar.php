<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "A Jugar!";
    include("head.php");
    include("botonera.php")?>

  </head>

  <body>
    <div class="container bg-light text-center">

    <nav>

    </nav>

    <div class="bg-tarjetita pt-5 pb-5">
    </div>

<main>


  <h1 class= "text-center pt-3 pb-3 m-0 titulo-jueguito text-wrap">A JUGAR!</h1>

  <div class="palabra-a-adivinar p-5">
    <h2>aca va la palabra secreta!!!</h2>
    <h2>_ _ _ _</h2>
  </div>
  <div class="bg-fondito pt-5 pb-5 ">
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
