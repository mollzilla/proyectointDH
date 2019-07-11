
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

    <title>Registracion</title>
  </head>
  <body>

<div class="container bg-light">

<nav>

  <?php
    $seccion = "home";
    include "header.php"; /* para incluir la botonera de navegacion*/
  ?>
</nav>

  <div class="bg-tarjetita pt-5 pb-5 ">
  </div>

  <main class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">




  <div class="card tarjetita-header mt-3 text-center">
      <div class="card-body">
      <h4 class="card-title mt-3">Bienvenido!</h4>
      <h5 class="card-subtitle text-secondary">Completa los siguientes datos para completar tu registracion.</h5>
      </div>


</div>

 <form action="register.php" method="post">
    <br>
   <label for="nombre" class='text-dark'>Nombre:</label>
   <input type="text" name="nombre" id="nombre" class="form-control" required>
   <br>
   <label for="email" class='text-dark'>E-mail:</label>
   <input type="text" name="email" id="email" class="form-control" required>
   <br>
   <label for="password" class='text-dark'>Contraseña:</label>
   <input type="password" name="password" id="password" class="form-control" required>
   <br>
   <label for="confirmar" class='text-dark'>Confirmar Contraseña:</label>
   <input type="password" name="confirmar" id="confirmar" class="form-control" required>
   <br>
   <label for="alias" class='text-dark'>Alias:</label>
   <input type="text" name="alias" id="alias" class="form-control">
   <br>
   <label for="avatar" class='text-dark'>Elige una Imagen</label>
   <input type="file" name="avatar" id="avatar" value="">
   <br>
      <input type="submit" value="Registrarse" class="btn btn-primary mt-2 mb-2">

 </form>



<!--


Funciones
que ninguno de los campos este vacio slvo el de avatar que no es requerido
boton de borrar
nombre  minimo 5 caracteres

-->
<?php
$errores = [];

if ($_POST) {

    // code...

    if (strlen($_POST["nombre"]) < 5){
  $errores[]= "El nombre de usuario debe tener al menos 5 Letras. Por favor, ingresa un nombre mas largo.";

 }

//------------------validar formato del mail

 if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {  $errores[]= "El correo ingresado no es una direccion de correo valida. Por favor ingresa una direccion de correo.";
}

//------------------pass minimo 8 Contraseña por  ahora sin hash
//------------------ verificacion de Contraseña alfanumerica


if (strlen($_POST["password"]) == 0 && strlen($_POST["confirmar"]) == 0) { $errores[]="Los dos campos de contraseña estan vacios"; }
else if (strlen($_POST["password"]) == 0)  { $errores[]="La contraseña esta vacia"; }
else if (strlen($_POST["password"]) < 8)  { $errores[]="La contraseña debe tener como minimo 8 caracteres"; }
else if (strlen($_POST["confirmar"]) == 0)  { $errores[]="Falta la confirmacion de contraseña"; }
else if ($_POST["password"] !== $_POST["confirmar"])  { $errores[]="Las Contraseñas no son iguales. Por favor ingresalas nuevamente."; }
else if(!ctype_alnum($_POST["password"])){
$errores[]="La Contraseña debe tener una longitud de al menos 8 caracteres.";
}


//------------------imagen en jpg jpeg png y peso del archivo (size <= 2mb)

if ($_POST["avatar"]) {

  $ext = pathinfo($_POST["avatar"], PATHINFO_EXTENSION);
    if ($ext !== "jpg" && $ext !== "jpeg" && $ext !== "png"){
      $errores[] = "El archivo ingresado no es un formato de imagen valido. Por favor intentalo nuevamente.";
    }


// esto no me anda porque necesito el path del archivo? esto significa que lo
// debo guardar antes de  compararlo?
  echo filesize($_POST["avatar"]);

//propuesta de filtrar por tamanio
/*
if (filesize($_POST["avatar"]) >= 2097152){
  $errores[] = "El archivo ingresado es demasiado grande. Por favor sube un archivo de 2mb o menor.";
}
*/
}

//esto esta mas arriba que el count de errores para poder comparar los datos ya guardados
//con los datos que esta intentando guardar el usuario

//Abro el archivo con los datos actuales
$usuariosEnJson = file_get_contents("archivo.txt");

//Ahora decodeo el array que me trajo en la linea anterior
$usuariosDecodeados = json_decode($usuariosEnJson, true);
//Ahora guardo el ultimo usuario que me llego x $_POST al final de $usuariosDecodeados

if (!empty($usuariosDecodeados)) {
//el problema que tengo ahora es que siempre me dice que el email ya esta registrado,
//aunque borre cada vez los datos de archivo.text

  foreach ($usuariosDecodeados as $usuario) {
    foreach ($usuario as $dato => $valor) {
       if ($dato === "email" && $valor === $_POST["email"]) {
        $errores[] = "El email escogido ya esa registrado. Por favor, elige otro o inicia sesion con tu usuario";
       }
    }
  }
}


if (count($errores) > 0) {
            ?><ul>
            <?php foreach ($errores as $error) { ?>
                <li class='text-danger p-2 text-center'><?= $error?></li>
    <?php } ?>
              </ul>
    <?php
    } else {
        $datosAGuardar = [];

//hacer una funcion que guarde el archuvi xq ya se valido.... ACA ME PARECE QUE TENGO
// QUE HACER QUE SEA UNA ARRAY ASOCIATIVA CON EL NOMBRE O ID COMO CLAVE

        $datosAGuardar["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $datosAGuardar["nombre"] = $_POST["nombre"];
        $datosAGuardar["email"] = $_POST["email"];
        $datosAGuardar["avatar"] = $_POST["avatar"];
        $datosAGuardar["id"] = count($usuariosDecodeados);



        //el file_get_contents y el decodeo estan mas arriba para poder usarlos
        // para comparar si hay otro usuario con el mismo id o mail
        $usuariosDecodeados[] = $datosAGuardar;
        //Ahora encodeo de nuevo lo que acabo de hacer a json
        $datosEnJson = json_encode($usuariosDecodeados);
        //Ahora guardo en el archivo la array encodeada
        file_put_contents("archivo.txt", $datosEnJson);
        echo "Gracias Por completar tus datos! tu usuario ha sido generado con exito";
    }

    if (!isset($_POST["password"]) || !isset($_POST["email"]) || !isset($_POST["nombre"]) ) {
    echo " <br>Por favor completa los datos que solicita el formulario";
    }
}



?>


<!-- errores Datos q vamos a mandar a un array. Si el array esta vacio, esta bien

hash cuando lo voy a guardar

procesar info para almacenar, en un json.

Manipular el json, recorrer y captar la info que me pide el usuario para mostrarlos
para recorrerlo y mostrar todos los usuarios, un foreach luego de decodificarlo

el path de la foto se guarda en el json, despues para ir a buscar es dinamico (complejo)*/

Utilizando los formularios de registro ya creados, register.php/.html agregarle
funcionamiento para que pueda subir una imágen de perfil.
Tener en cuenta que es necesario guardar junto con los datos del usuario el nombre del
archivo para poder referenciar posteriormente. Se recomienda renombrar el archivo
subido por el id del usuario. (En caso de no tenerlo aún, agregarle un id al usuario. El
primero tendrá como id el número 1, el segundo el número 2 y así continuará la
secuencia…). Si el email fuese un campo único, también podría utilizarse esto.
-->


  </main>

    <footer>
    <?php include 'footer.php'; ?>
    </footer>

  </div>
</body>

</html>
