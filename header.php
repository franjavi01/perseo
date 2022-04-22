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
            <div class="d-flex justify-content-end">
                <div>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>
                    <?php require_once 'login.php';  ?>
                </div>
                <div>.</div>
                <div>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registerModal">Registro</button>
                    <?php require_once 'register.php';  ?>
                </div>
            </div>    
                   
                        
                    
               
        </nav>    
    </header>