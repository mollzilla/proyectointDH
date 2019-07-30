
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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Panel de Administrador - Ingresar Nueva Palabra</title>
  </head>
  <body>
<body>


<div class="container bg-light">

  <div class="bg-admin pt-5 pb-5">
  </div>

  <main class="main p-4 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
    <div class="titulos text-center pt-4">
      <h2>Panel de Administrador</h2>
      <h3>Ingresar Nueva Palabra</h3>
    </div>

    <form action="nueva-palabra.php" method="POST">
            <div class="form-group">
              <label for="nombre">Palabra: </label>
              <input type="text" id="palabra" name="palabra" class="form-control" value="<?= $_POST? $_POST["palabra"] : ''; ?>" required> <br>
            </div>

            <div class="form-group">
                <label for="Categoria">Categoria: </label>
                <select class="custom-select" id="categoria" name="categoria">
                  <option value="naturaleza">Naturaleza</option>
                  <option value="humanidad">Humanidad</option>
                </select>
            </div>

            <br>
            <input type="submit" name="enviar" class="form-control btn-primary mt-3" value="Enviar">

    </form>




      <?php //validacion de preexistencia de palabra ingresada

if ($_POST) {


    $palabrasEnJson = file_get_contents("palabras.json"); //me traigo las palabras guardadas
    $palabrasDecodeadas = json_decode($palabrasEnJson); //las decodeo

    foreach ($palabrasDecodeadas as $arrayPalabra) { //recorro el array para ver si se repiten
      $errores = [];
      foreach ($arrayPalabra as $categoria => $palabra) {
        if ($palabra == $_POST["palabra"]) {
          $errores[] = "Esa palabra ya existe"; //guardo el error
        }
      }
    }

    if (strlen($_POST["palabra"]) > 4 || strlen($_POST["palabra"]) < 4) {
        $errores[] = "La longitud de la palabra es incorrecta. Por favor, ingresa una palabra de 4 letras";
    }

    if (empty($errores)) {$palabrasDecodeadas[] = [$_POST["categoria"] => $_POST["palabra"]];
      $palabrasEnJson = json_encode($palabrasDecodeadas);

      file_put_contents("palabras.json", $palabrasEnJson);
      echo "Gracias! palabra recibida";}
    else { ?>
      <ul>
      <?php foreach ($errores as $error) { ?>
          <li><?=$error?></li>
      <?php }; ?>
        </ul>


          <?php } }?>



  <a href="tabla-palabras.php" class="form-control btn-primary mt-3 text-center">Volver a Panel de Administrador</a>



      </main>

      <div class="admin-footer p-5 mt-5" >

      </div>

    </div>
  </body>
</html>
