<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Perseo - Iniciar sesión</title>
  </head>
<body>
<h1>Registro</h1>
    <?php require 'conexionBaseDatos.php'; ?>
    <form action="./registerMessage.php" method="post">
        <input type="email" name="email" placeholder="dirección de Email" required><br>
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required><br>
        <input type="password" name="password1" placeholder="Contraseña" required><br>
        <input type="password" name="password2" placeholder="Repite contraseña" required><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
</body>