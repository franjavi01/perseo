<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Perseo - Mensaje del Registro</title>
  </head>
  <body>
      
<?php

$conexion = mysqli_connect("localhost", "root", "", "perseo");

if (!$conexion) {
    echo "error al conectar con la base de datos";
}

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$insert = "INSERT INTO usuarios (email, nombre, apellidos, password1) VALUES ('$email', '$nombre', '$apellidos', '$password1')";

$noRepeatPassword = mysqli_query($conexion, "SELECT * FROM usuarios WHERE password1 = '$password1'");
if ($password1 != $password2) {
    echo "La repetición de la contaseña no coincide con la original<br>";
    echo "<a href='./register.php'> Vuelve a intentarlo</a>"; 
    exit;
}

$noRepeatEmail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if(mysqli_num_rows($noRepeatEmail) > 0){
    echo "La dirección de correo electrónico que has introducido ya existe<br>";
    echo "<a href='./register.php'> Escoje otra dirección de correo electrónico</a>";
    exit;
}

$resultRegister = mysqli_query($conexion, $insert);
if (!$resultRegister) {
    echo "error de registro";
}else{
    echo "Te hemos enviado un enlace a tu correo electrónico. Comprueba que te ha llegado correctamente.";
}

mysqli_close($conexion);

?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
</body>
</html>
