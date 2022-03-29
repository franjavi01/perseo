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


