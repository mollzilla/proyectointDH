
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

    <form action="tabla-palabras.php" method="POST">
            <div class="form-group">
              <label for="nombre">Palabra: </label>
              <input type="text" id="palabra" name="palabra" class="form-control" value="<?= $_POST? $_POST["nombre"] : ''; ?>" required> <br>
            </div>

            <div class="form-group">
                <label for="Catetgoria">Categoria: </label>
                <select class="custom-select" name="">
                  <option value="1" id="categoria">Naturaleza</option>
                </select>
            </div>

            <br>
            <input type="submit" name="enviar" class="form-control btn-primary mt-3" value="Enviar">

    </form>

<?php


    if (isset($_POST)) {
            echo "Gracias! Palabra correctamente recibida";
        } else { ?>
          <p class="text-center text-danger">Por Favor Ingresa una palabra</p>
        <?php //tengo un error, siempre me manda el mensaje como si hubiera mandado algo
          }
        ?>

<div class="admin-footer p-5 mt-5" >

</div>


      </main>
    </div>
  </body>
</html>
