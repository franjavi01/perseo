<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Perseo - Iniciar sesión</title>
  </head>
<body>
<?php require 'conexionBaseDatos.php'; ?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Iniciar sesión</h5>
            <a class="btn-close" href="./" role="button"></a>
        </div>
        <div class="modal-body">
            <form action="./home.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Dirección de Email" atofocus required>
                    <input type="password" name="password1" class="form-control" placeholder="Contraseña" atofocus required>
                    <input type="submit" name="enviar" value="Enviar"> 
                </div>
            </form>
        </div>
    </div>
</div>