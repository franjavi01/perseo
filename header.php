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
    <title>Cursos Online Perseo</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-primary">
            <div>
                <h1>PERSEO</h1>
                <h3>Cursos online para profesionales</h3>
            </div>
            <div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>
                <div class="modal fade" tabindex="-1" id="loginModal" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle" style="color: black;">Iniciar sesión</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php require 'conexionBaseDatos.php'; ?>
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
                </div>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registerModal">Registro</button>
                <div class="modal fade" tabindex="-1" id="registerModal" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle" style="color: black;">Registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./registerMessage.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Dirección de Email" atofocus required>
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" atofocus required>
                                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" atofocus required>
                                        <input type="password" name="password1" class="form-control" placeholder="Contraseña" atofocus required>
                                        <input type="password" name="password2" class="form-control" placeholder="Repite contraseña" atofocus required>
                                        <input type="submit" name="enviar" value="Enviar"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>