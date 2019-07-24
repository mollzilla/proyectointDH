<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $seccion = "Preguntas Frecuentes";
    include("head.php");
    include("header.php")?>

  </head>
  <body>
<body>

<nav>
  <?php   include "header.php"; /* para incluir la botonera de navegacion*/?>
</nav>

    <main class="main">
        <div class="container bg-light pt5">

          <div class="bg-tarjetita pt-5 pb-5">
          </div>

          <h2 class="p-3 pl-5 font-weight-bold">Preguntas Frecuentes</h2>


      <main class="container">

        <?php    $questions = [
            "Lorem ipsum dolor sit amet," => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "ipsum dolor sit amet," => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "dolor sit amet," => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "sit amet," => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "amet," => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Lorem ipsum" => "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",

            ]

        ?>



      <div class="main">
        <ul>
          <?php foreach ($questions as $question => $answer) : ?>
            <li class="font-weight-bold pb-3 pt-3"><?= $question ?></li>
            <li class=""><?= $answer ?></li>
          <?php endforeach; ?>
        </ul>

      </div>
</main>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <div class="bg-fondito pt-5 pb-5 ">
  </div>


    </main>
  </body>
</html>
