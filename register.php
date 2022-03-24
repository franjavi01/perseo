<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Perseo - Registro</title>
</head>
<body>
<h1>Registro</h1>
    <?php require 'conexionBaseDatos.php'; ?>
    <form action="./home.php" method="post">
        <input type="email" name="user" placeholder="dirección de Email" required><br>
        <input type="text" name="user" placeholder="Nombre" required><br>
        <input type="text" name="user" placeholder="Apellidos" required><br>
        <input type="password" name="password1" placeholder="Contraseña" required><br>
        <input type="password" name="password2" placeholder="Repite contraseña" required><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>